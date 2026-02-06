<?php
$page_title = 'テスト・CI/CD - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 35;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">テスト・CI/CD構築</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">Claude Codeと一緒にテストを書き、CI/CDパイプラインを構築します。テストピラミッドに従い、単体テストからE2Eテストまで段階的に品質を担保していきましょう。</p>
        </div>

        <!-- Section 1: テスト戦略 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">テスト戦略</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4">テストピラミッド</h3>
                <p class="text-sm text-gray-700 mb-4">テストピラミッドとは、テストを3つのレベルに分け、下層ほど多く・高速に、上層ほど少なく・重要なフローに絞る考え方です。TaskFlowプロジェクトでは以下の構成で進めます。</p>
                <div class="space-y-4">
                    <div class="p-4 bg-green-50 rounded border border-green-200">
                        <h4 class="font-bold text-green-800">&#9745; 単体テスト（pytest）</h4>
                        <p class="text-sm text-gray-700 mt-1">サービス層・リポジトリ層のビジネスロジックを検証。最も数が多く、実行が高速。</p>
                        <p class="text-sm text-green-700 font-semibold mt-1">カバレッジ目標：サービス層 80%以上</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded border border-blue-200">
                        <h4 class="font-bold text-blue-800">&#9745; APIテスト（pytest + httpx）</h4>
                        <p class="text-sm text-gray-700 mt-1">エンドポイントの統合テスト。リクエスト/レスポンスの形式、認証、エラーハンドリングを検証。</p>
                        <p class="text-sm text-blue-700 font-semibold mt-1">カバレッジ目標：主要エンドポイント 100%</p>
                    </div>
                    <div class="p-4 bg-purple-50 rounded border border-purple-200">
                        <h4 class="font-bold text-purple-800">&#9745; E2Eテスト（Playwright）</h4>
                        <p class="text-sm text-gray-700 mt-1">ブラウザ上で主要ユーザーフローを自動操作。認証フロー、タスク操作など重要な導線のみ。</p>
                        <p class="text-sm text-purple-700 font-semibold mt-1">カバレッジ目標：主要フロー（認証、タスクCRUD、カンバン操作）</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Step 1 - 単体テスト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 1：単体テスト</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>タスクサービスの単体テストを書いてください。

【テスト対象】
backend/app/services/task_service.py

【テストケース】
- タスク作成（正常系、バリデーションエラー）
- タスク更新（正常系、権限エラー）
- ステータス変更のビジネスルール

【方針】
- pytest を使用
- DBアクセスはモックで置き換え
- conftest.py にフィクスチャを定義
- 各テストは独立して実行可能にする</pre>
                </div>
            </div>

            <h3 class="font-bold text-lg mb-3">conftest.py（テスト共通設定）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># backend/tests/conftest.py</span>
import pytest
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from fastapi.testclient import TestClient

from app.main import app
from app.database import Base, get_db
from app.models.user import User
from app.auth.jwt import create_access_token

<span class="text-green-400"># テスト用DB（SQLite in-memory）</span>
SQLALCHEMY_DATABASE_URL = "sqlite:///./test.db"
engine = create_engine(SQLALCHEMY_DATABASE_URL, connect_args={"check_same_thread": False})
TestingSessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)

@pytest.fixture(scope="function")
def db_session():
    <span class="text-green-400">"""各テストごとにクリーンなDBセッションを提供"""</span>
    Base.metadata.create_all(bind=engine)
    session = TestingSessionLocal()
    try:
        yield session
    finally:
        session.close()
        Base.metadata.drop_all(bind=engine)

@pytest.fixture(scope="function")
def client(db_session):
    <span class="text-green-400">"""テスト用FastAPIクライアント"""</span>
    def override_get_db():
        try:
            yield db_session
        finally:
            pass
    app.dependency_overrides[get_db] = override_get_db
    yield TestClient(app)
    app.dependency_overrides.clear()

@pytest.fixture
def test_user(db_session):
    <span class="text-green-400">"""テスト用ユーザーを作成"""</span>
    user = User(email="test@example.com", name="Test User")
    user.set_password("password123")
    db_session.add(user)
    db_session.commit()
    db_session.refresh(user)
    return user

@pytest.fixture
def auth_headers(test_user):
    <span class="text-green-400">"""認証済みヘッダーを返す"""</span>
    token = create_access_token(data={"sub": str(test_user.id)})
    return {"Authorization": f"Bearer {token}"}</pre>
            </div>

            <h3 class="font-bold text-lg mb-3">test_task_service.py</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># backend/tests/services/test_task_service.py</span>
import pytest
from unittest.mock import MagicMock, patch
from app.services.task_service import TaskService
from app.schemas.task import TaskCreate, TaskUpdate
from app.exceptions import ValidationError, PermissionError

class TestTaskService:
    def setup_method(self):
        self.db = MagicMock()
        self.service = TaskService(self.db)

    <span class="text-green-400"># --- タスク作成 ---</span>
    def test_create_task_success(self):
        <span class="text-green-400">"""正常系：タスクが正しく作成される"""</span>
        task_data = TaskCreate(
            title="新機能の実装",
            description="ログイン機能を追加",
            project_id=1,
            assignee_id=1
        )
        result = self.service.create_task(task_data, user_id=1)

        assert result.title == "新機能の実装"
        assert result.status == "todo"
        self.db.add.assert_called_once()
        self.db.commit.assert_called_once()

    def test_create_task_validation_error(self):
        <span class="text-green-400">"""異常系：タイトル空でバリデーションエラー"""</span>
        with pytest.raises(ValidationError) as exc_info:
            task_data = TaskCreate(
                title="",
                project_id=1
            )
            self.service.create_task(task_data, user_id=1)
        assert "title" in str(exc_info.value)

    <span class="text-green-400"># --- タスク更新 ---</span>
    def test_update_task_success(self):
        <span class="text-green-400">"""正常系：タスクが正しく更新される"""</span>
        mock_task = MagicMock()
        mock_task.project.member_ids = [1, 2]
        self.db.query.return_value.get.return_value = mock_task

        update_data = TaskUpdate(title="更新後のタイトル")
        result = self.service.update_task(
            task_id=1, data=update_data, user_id=1
        )

        assert result is not None
        self.db.commit.assert_called_once()

    def test_update_task_permission_error(self):
        <span class="text-green-400">"""異常系：プロジェクト外のユーザーは更新不可"""</span>
        mock_task = MagicMock()
        mock_task.project.member_ids = [1, 2]
        self.db.query.return_value.get.return_value = mock_task

        with pytest.raises(PermissionError):
            update_data = TaskUpdate(title="不正な更新")
            self.service.update_task(
                task_id=1, data=update_data, user_id=999
            )

    <span class="text-green-400"># --- ステータス変更ビジネスルール ---</span>
    def test_status_change_todo_to_in_progress(self):
        <span class="text-green-400">"""todo -> in_progress は許可"""</span>
        mock_task = MagicMock()
        mock_task.status = "todo"
        mock_task.project.member_ids = [1]
        self.db.query.return_value.get.return_value = mock_task

        result = self.service.change_status(
            task_id=1, new_status="in_progress", user_id=1
        )
        assert result.status == "in_progress"

    def test_status_change_invalid_transition(self):
        <span class="text-green-400">"""done -> todo は許可しない"""</span>
        mock_task = MagicMock()
        mock_task.status = "done"
        mock_task.project.member_ids = [1]
        self.db.query.return_value.get.return_value = mock_task

        with pytest.raises(ValidationError, match="無効なステータス遷移"):
            self.service.change_status(
                task_id=1, new_status="todo", user_id=1
            )</pre>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-2">&#10003; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># Claude Codeへの指示</span>
pytest backend/tests/services/ -v を実行して、全テストがパスすることを確認してください。</pre>
                </div>
            </div>
        </section>

        <!-- Section 3: Step 2 - APIテスト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 2：APIテスト</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>API統合テストを書いてください。

【テスト対象】
- 認証エンドポイント（/api/auth/*）
- タスクエンドポイント（/api/tasks/*）

【方針】
- httpx.AsyncClient と TestClient を使用
- 実際のDB（テスト用SQLite）を使用
- 認証が必要なエンドポイントは auth_headers フィクスチャを使用
- レスポンスのステータスコードとボディ形式を検証</pre>
                </div>
            </div>

            <h3 class="font-bold text-lg mb-3">test_auth.py（認証APIテスト）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># backend/tests/api/test_auth.py</span>
import pytest
from fastapi.testclient import TestClient

class TestAuthAPI:
    def test_register(self, client: TestClient):
        <span class="text-green-400">"""ユーザー登録が成功する"""</span>
        response = client.post("/api/auth/register", json={
            "email": "new@example.com",
            "name": "New User",
            "password": "securePass123"
        })
        assert response.status_code == 201
        data = response.json()
        assert data["email"] == "new@example.com"
        assert "password" not in data

    def test_register_duplicate_email(self, client: TestClient, test_user):
        <span class="text-green-400">"""重複メールアドレスで登録失敗"""</span>
        response = client.post("/api/auth/register", json={
            "email": "test@example.com",
            "name": "Duplicate",
            "password": "password123"
        })
        assert response.status_code == 409

    def test_login(self, client: TestClient, test_user):
        <span class="text-green-400">"""ログインでトークンが返される"""</span>
        response = client.post("/api/auth/login", json={
            "email": "test@example.com",
            "password": "password123"
        })
        assert response.status_code == 200
        data = response.json()
        assert "access_token" in data
        assert data["token_type"] == "bearer"

    def test_login_wrong_password(self, client: TestClient, test_user):
        <span class="text-green-400">"""不正なパスワードでログイン失敗"""</span>
        response = client.post("/api/auth/login", json={
            "email": "test@example.com",
            "password": "wrongpassword"
        })
        assert response.status_code == 401

    def test_me_endpoint(self, client: TestClient, auth_headers):
        <span class="text-green-400">"""認証済みユーザー情報の取得"""</span>
        response = client.get("/api/auth/me", headers=auth_headers)
        assert response.status_code == 200
        data = response.json()
        assert data["email"] == "test@example.com"</pre>
            </div>

            <h3 class="font-bold text-lg mb-3">test_tasks.py（タスクAPIテスト）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># backend/tests/api/test_tasks.py</span>
import pytest
from fastapi.testclient import TestClient

class TestTasksAPI:
    def test_create_task(self, client: TestClient, auth_headers):
        <span class="text-green-400">"""タスク作成が成功する"""</span>
        response = client.post("/api/tasks/", json={
            "title": "テストタスク",
            "description": "APIテスト用のタスク",
            "project_id": 1,
            "priority": "high"
        }, headers=auth_headers)
        assert response.status_code == 201
        data = response.json()
        assert data["title"] == "テストタスク"
        assert data["status"] == "todo"
        assert "id" in data

    def test_list_tasks(self, client: TestClient, auth_headers):
        <span class="text-green-400">"""タスク一覧の取得"""</span>
        <span class="text-green-400"># まずタスクを作成</span>
        client.post("/api/tasks/", json={
            "title": "タスク1",
            "project_id": 1
        }, headers=auth_headers)
        client.post("/api/tasks/", json={
            "title": "タスク2",
            "project_id": 1
        }, headers=auth_headers)

        response = client.get(
            "/api/tasks/?project_id=1",
            headers=auth_headers
        )
        assert response.status_code == 200
        data = response.json()
        assert len(data) >= 2

    def test_unauthorized_access(self, client: TestClient):
        <span class="text-green-400">"""認証なしでのアクセスは拒否"""</span>
        response = client.get("/api/tasks/")
        assert response.status_code == 401
        assert response.json()["detail"] == "Not authenticated"

    def test_update_task(self, client: TestClient, auth_headers):
        <span class="text-green-400">"""タスク更新が成功する"""</span>
        <span class="text-green-400"># タスクを作成</span>
        create_resp = client.post("/api/tasks/", json={
            "title": "更新前",
            "project_id": 1
        }, headers=auth_headers)
        task_id = create_resp.json()["id"]

        <span class="text-green-400"># タスクを更新</span>
        response = client.patch(f"/api/tasks/{task_id}", json={
            "title": "更新後のタイトル",
            "priority": "low"
        }, headers=auth_headers)
        assert response.status_code == 200
        assert response.json()["title"] == "更新後のタイトル"</pre>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-2">&#10003; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># Claude Codeへの指示</span>
pytest backend/tests/ -v --cov=app --cov-report=term-missing を実行してください。
カバレッジレポートを確認し、不足しているテストがあれば追加してください。</pre>
                </div>
            </div>
        </section>

        <!-- Section 4: Step 3 - E2Eテスト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 3：E2Eテスト（Playwright）</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>PlaywrightでE2Eテストを構築してください。

【セットアップ】
- frontend/ディレクトリにPlaywrightをインストール
- playwright.config.ts を作成

【テストケース】
1. 認証フロー（ユーザー登録 -> ログイン -> ログアウト）
2. タスク操作（タスク作成 -> カンバンで確認 -> ドラッグで移動）

【注意点】
- テスト用のbaseURLはlocalhost:3000
- バックエンドAPIはlocalhost:8000で起動済みとする
- 各テストは独立して実行可能にする</pre>
                </div>
            </div>

            <h3 class="font-bold text-lg mb-3">playwright.config.ts</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400">// frontend/playwright.config.ts</span>
import { defineConfig, devices } from '@playwright/test';

export default defineConfig({
  testDir: './e2e',
  fullyParallel: true,
  forbidOnly: !!process.env.CI,
  retries: process.env.CI ? 2 : 0,
  workers: process.env.CI ? 1 : undefined,
  reporter: 'html',
  use: {
    baseURL: 'http://localhost:3000',
    trace: 'on-first-retry',
    screenshot: 'only-on-failure',
  },
  projects: [
    {
      name: 'chromium',
      use: { ...devices['Desktop Chrome'] },
    },
  ],
  webServer: {
    command: 'npm run dev',
    url: 'http://localhost:3000',
    reuseExistingServer: !process.env.CI,
  },
});</pre>
            </div>

            <h3 class="font-bold text-lg mb-3">auth.spec.ts（認証フローテスト）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400">// frontend/e2e/auth.spec.ts</span>
import { test, expect } from '@playwright/test';

test.describe('認証フロー', () => {
  test('ユーザー登録 -> ログイン -> ログアウト', async ({ page }) => {
    <span class="text-green-400">// ユーザー登録</span>
    await page.goto('/register');
    await page.fill('[name="name"]', 'テストユーザー');
    await page.fill('[name="email"]', `test-${Date.now()}@example.com`);
    await page.fill('[name="password"]', 'Password123!');
    await page.fill('[name="passwordConfirm"]', 'Password123!');
    await page.click('button[type="submit"]');

    <span class="text-green-400">// ダッシュボードにリダイレクトされる</span>
    await expect(page).toHaveURL(/\/dashboard/);
    await expect(page.locator('text=テストユーザー')).toBeVisible();

    <span class="text-green-400">// ログアウト</span>
    await page.click('[data-testid="user-menu"]');
    await page.click('text=ログアウト');
    await expect(page).toHaveURL(/\/login/);
  });

  test('不正なパスワードでログイン失敗', async ({ page }) => {
    await page.goto('/login');
    await page.fill('[name="email"]', 'test@example.com');
    await page.fill('[name="password"]', 'wrongpassword');
    await page.click('button[type="submit"]');

    await expect(
      page.locator('text=メールアドレスまたはパスワードが正しくありません')
    ).toBeVisible();
  });
});</pre>
            </div>

            <h3 class="font-bold text-lg mb-3">tasks.spec.ts（タスク操作テスト）</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400">// frontend/e2e/tasks.spec.ts</span>
import { test, expect } from '@playwright/test';

test.describe('タスク操作', () => {
  test.beforeEach(async ({ page }) => {
    <span class="text-green-400">// ログイン済み状態にする</span>
    await page.goto('/login');
    await page.fill('[name="email"]', 'test@example.com');
    await page.fill('[name="password"]', 'Password123!');
    await page.click('button[type="submit"]');
    await expect(page).toHaveURL(/\/dashboard/);
  });

  test('タスクを作成してカンバンで確認', async ({ page }) => {
    <span class="text-green-400">// プロジェクトページへ移動</span>
    await page.click('[data-testid="project-link"]');

    <span class="text-green-400">// タスク作成ダイアログを開く</span>
    await page.click('button:has-text("タスク追加")');
    await page.fill('[name="title"]', 'E2Eテスト用タスク');
    await page.fill('[name="description"]', 'Playwrightから作成');
    await page.selectOption('[name="priority"]', 'high');
    await page.click('button:has-text("作成")');

    <span class="text-green-400">// Todoカラムにタスクが表示される</span>
    const todoColumn = page.locator('[data-testid="column-todo"]');
    await expect(todoColumn.locator('text=E2Eテスト用タスク')).toBeVisible();
  });

  test('タスクをドラッグして別カラムに移動', async ({ page }) => {
    await page.click('[data-testid="project-link"]');

    <span class="text-green-400">// タスクカードを取得</span>
    const taskCard = page.locator('[data-testid="task-card"]').first();
    const inProgressColumn = page.locator('[data-testid="column-in_progress"]');

    <span class="text-green-400">// ドラッグ&ドロップ</span>
    await taskCard.dragTo(inProgressColumn);

    <span class="text-green-400">// In Progressカラムに移動したことを確認</span>
    await expect(
      inProgressColumn.locator('[data-testid="task-card"]')
    ).toHaveCount(1);
  });
});</pre>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-2">&#10003; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># Claude Codeへの指示</span>
cd frontend && npx playwright test を実行してください。
失敗するテストがあれば原因を調査して修正してください。</pre>
                </div>
            </div>
        </section>

        <!-- Section 5: Step 4 - GitHub Actions CI/CD -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Step 4：GitHub Actions CI/CD</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-2">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>GitHub ActionsでCI/CDパイプラインを構築してください。

【CI（PR時に実行）】
- lint と型チェック（フロントエンド・バックエンド並列）
- バックエンドテスト（pytest + MySQL）
- フロントエンドテスト（Playwright）

【CD（mainマージ時に実行）】
- フロントエンド → Vercel にデプロイ
- バックエンド → Railway にデプロイ

MySQLサービスコンテナを使ってテスト用DBを構築してください。</pre>
                </div>
            </div>

            <h3 class="font-bold text-lg mb-3">.github/workflows/ci.yml</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># .github/workflows/ci.yml</span>
name: CI

on:
  pull_request:
    branches: [main]

jobs:
  lint-and-type-check:
    runs-on: ubuntu-latest
    strategy:
      matrix:
        target: [frontend, backend]
    steps:
      - uses: actions/checkout@v4

      <span class="text-green-400"># フロントエンド</span>
      - name: Setup Node.js
        if: matrix.target == 'frontend'
        uses: actions/setup-node@v4
        with:
          node-version: '20'
          cache: 'npm'
          cache-dependency-path: frontend/package-lock.json

      - name: Install &amp; Lint (Frontend)
        if: matrix.target == 'frontend'
        run: |
          cd frontend
          npm ci
          npm run lint
          npm run type-check

      <span class="text-green-400"># バックエンド</span>
      - name: Setup Python
        if: matrix.target == 'backend'
        uses: actions/setup-python@v5
        with:
          python-version: '3.12'

      - name: Install &amp; Lint (Backend)
        if: matrix.target == 'backend'
        run: |
          cd backend
          pip install -r requirements.txt
          ruff check .
          mypy app/

  test-backend:
    runs-on: ubuntu-latest
    needs: lint-and-type-check
    services:
      mysql:
        image: mysql:8.0
        env:
          MYSQL_ROOT_PASSWORD: testpass
          MYSQL_DATABASE: taskflow_test
        ports:
          - 3306:3306
        options: >-
          --health-cmd="mysqladmin ping -h localhost"
          --health-interval=10s
          --health-timeout=5s
          --health-retries=5
    steps:
      - uses: actions/checkout@v4

      - name: Setup Python
        uses: actions/setup-python@v5
        with:
          python-version: '3.12'

      - name: Install dependencies
        run: |
          cd backend
          pip install -r requirements.txt
          pip install pytest-cov

      - name: Run tests
        env:
          DATABASE_URL: mysql+pymysql://root:testpass@localhost:3306/taskflow_test
          JWT_SECRET: test-secret-key
        run: |
          cd backend
          pytest tests/ -v --cov=app --cov-report=xml

      - name: Upload coverage
        uses: actions/upload-artifact@v4
        with:
          name: backend-coverage
          path: backend/coverage.xml

  test-frontend:
    runs-on: ubuntu-latest
    needs: lint-and-type-check
    steps:
      - uses: actions/checkout@v4

      - name: Setup Node.js
        uses: actions/setup-node@v4
        with:
          node-version: '20'
          cache: 'npm'
          cache-dependency-path: frontend/package-lock.json

      - name: Install dependencies
        run: |
          cd frontend
          npm ci

      - name: Install Playwright browsers
        run: |
          cd frontend
          npx playwright install --with-deps chromium

      - name: Run Playwright tests
        run: |
          cd frontend
          npx playwright test

      - name: Upload test report
        if: always()
        uses: actions/upload-artifact@v4
        with:
          name: playwright-report
          path: frontend/playwright-report/</pre>
            </div>

            <h3 class="font-bold text-lg mb-3">.github/workflows/deploy.yml</h3>
            <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-6">
<pre><span class="text-green-400"># .github/workflows/deploy.yml</span>
name: Deploy

on:
  push:
    branches: [main]

jobs:
  deploy-frontend:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Deploy to Vercel
        uses: amondnet/vercel-action@v25
        with:
          vercel-token: ${{ secrets.VERCEL_TOKEN }}
          vercel-org-id: ${{ secrets.VERCEL_ORG_ID }}
          vercel-project-id: ${{ secrets.VERCEL_PROJECT_ID }}
          vercel-args: '--prod'
          working-directory: frontend

  deploy-backend:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Install Railway CLI
        run: npm i -g @railway/cli

      - name: Deploy to Railway
        env:
          RAILWAY_TOKEN: ${{ secrets.RAILWAY_TOKEN }}
        run: |
          cd backend
          railway up --detach</pre>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-2">&#10003; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># Claude Codeへの指示</span>
作成したワークフローファイルをGitHubにプッシュしてください。
git add .github/workflows/ && git commit -m "Add CI/CD pipelines" && git push

その後、GitHubのActionsタブでワークフローの実行状況を確認します。</pre>
                </div>
            </div>

            <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded mb-6">
                <h4 class="font-bold text-red-800 mb-2">注意：シークレットの設定</h4>
                <p class="text-sm text-gray-700">デプロイ用のワークフローを動作させるには、GitHubリポジトリの Settings > Secrets and variables > Actions で以下のシークレットを設定してください。</p>
                <ul class="text-sm text-gray-700 mt-2 space-y-1">
                    <li>・<code class="bg-gray-100 px-1 rounded">VERCEL_TOKEN</code> - Vercelのアクセストークン</li>
                    <li>・<code class="bg-gray-100 px-1 rounded">VERCEL_ORG_ID</code> - VercelのOrganization ID</li>
                    <li>・<code class="bg-gray-100 px-1 rounded">VERCEL_PROJECT_ID</code> - VercelのProject ID</li>
                    <li>・<code class="bg-gray-100 px-1 rounded">RAILWAY_TOKEN</code> - Railwayのアクセストークン</li>
                </ul>
            </div>
        </section>

        <!-- Section 6: テスト実行結果の確認 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">テスト実行結果の確認</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-3">pytestの出力の読み方</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre><span class="text-green-400"># 実行結果の例</span>
tests/services/test_task_service.py::TestTaskService::test_create_task_success PASSED
tests/services/test_task_service.py::TestTaskService::test_create_task_validation_error PASSED
tests/services/test_task_service.py::TestTaskService::test_update_task_success PASSED
tests/services/test_task_service.py::TestTaskService::test_update_task_permission_error PASSED
tests/api/test_auth.py::TestAuthAPI::test_register PASSED
tests/api/test_auth.py::TestAuthAPI::test_login PASSED

<span class="text-green-400">---------- coverage: ----------</span>
Name                          Stmts   Miss  Cover
--------------------------------------------------
app/services/task_service.py     45      5    89%
app/routers/auth.py              32      0   100%
app/routers/tasks.py             58      3    95%
--------------------------------------------------
TOTAL                           280     28    90%</pre>
                </div>
                <ul class="text-sm space-y-2 text-gray-700">
                    <li>&#10003; <strong>PASSED</strong> - テストが正常に通過</li>
                    <li>&#10003; <strong>FAILED</strong> - テストが失敗（期待値と実際の値が不一致）</li>
                    <li>&#10003; <strong>Cover列</strong> - 各ファイルのカバレッジ率。Missはテストで実行されなかった行数</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-3">Playwrightレポートの確認</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre><span class="text-green-400"># HTMLレポートを開く</span>
cd frontend && npx playwright show-report</pre>
                </div>
                <ul class="text-sm space-y-2 text-gray-700">
                    <li>&#10003; ブラウザでレポートが開き、各テストの結果を視覚的に確認できます</li>
                    <li>&#10003; 失敗したテストにはスクリーンショットとトレースが添付されます</li>
                    <li>&#10003; トレースビューアでは、テスト実行中の各ステップを再生できます</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3">CI/CDパイプラインの確認</h3>
                <ul class="text-sm space-y-2 text-gray-700">
                    <li>&#10003; <strong>GitHubのActionsタブ</strong>でワークフローの実行状況をリアルタイムで確認</li>
                    <li>&#10003; 各ジョブの<strong>ログ</strong>をクリックして詳細な実行結果を確認</li>
                    <li>&#10003; PRに<strong>ステータスチェック</strong>が表示され、全テスト通過でマージ可能になります</li>
                    <li>&#10003; <strong>Artifacts</strong>からカバレッジレポートやPlaywrightレポートをダウンロードできます</li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="project-impl2.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                実装フェーズ2
            </a>
            <a href="project-deploy.php" class="flex items-center bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-600">
                次へ：デプロイ・運用
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
