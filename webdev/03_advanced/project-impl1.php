<?php
$page_title = '実装フェーズ1 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 33;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">実装フェーズ1：コア機能</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">認証、プロジェクト、タスクのCRUDなど、コア機能をClaude Codeで実装します。AIエージェントに的確な指示を出しながら、段階的にアプリケーションを構築していきましょう。</p>
        </div>

        <!-- Phase 1 概要 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Phase 1 で実装する機能</h2>
            <div class="space-y-2">
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">1</span>
                    <span>Docker環境構築</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">2</span>
                    <span>ユーザー認証（JWT）</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">3</span>
                    <span>プロジェクトCRUD</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">4</span>
                    <span>タスクCRUD</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">5</span>
                    <span>カンバンボードUI</span>
                </div>
            </div>
        </section>

        <!-- ステップ1: Docker環境構築 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ1：Docker環境構築</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-3">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>TaskFlowプロジェクトのDocker開発環境を構築してください。

【コンテナ構成】
- db: MySQL 8.0（ポート3306）
  - データベース名: taskflow
  - ルートパスワード: rootpass
  - ユーザー: taskflow / taskflow_pass
  - ボリュームでデータ永続化
- backend: FastAPI（ポート8000）
  - Python 3.11ベース
  - ホットリロード有効
  - dbコンテナに依存
- frontend: Next.js 14（ポート3000）
  - Node.js 20ベース
  - ホットリロード有効
- redis: Redis 7（ポート6379）
  - キャッシュおよびWebSocket用
  - ボリュームでデータ永続化

【要件】
- compose.yamlを使用（docker-compose.ymlではなく）
- 各サービスのDockerfileも作成
- .env.exampleにデフォルト値を記載
- ヘルスチェックを全コンテナに設定</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">Claude Codeが行うこと</h4>
                <ul class="space-y-2 text-sm">
                    <li>&#10003; <code>compose.yaml</code> - Docker Compose設定ファイル</li>
                    <li>&#10003; <code>backend/Dockerfile</code> - FastAPI用Dockerfile</li>
                    <li>&#10003; <code>frontend/Dockerfile</code> - Next.js用Dockerfile</li>
                    <li>&#10003; <code>.env.example</code> - 環境変数テンプレート</li>
                    <li>&#10003; <code>backend/requirements.txt</code> - Python依存パッケージ</li>
                    <li>&#10003; <code>frontend/package.json</code> - Node.js依存パッケージ</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：compose.yaml</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># compose.yaml</span>
services:
  db:
    image: mysql:8.0
    container_name: taskflow-db
    environment:
      MYSQL_ROOT_PASSWORD: ${DB_ROOT_PASSWORD:-rootpass}
      MYSQL_DATABASE: ${DB_NAME:-taskflow}
      MYSQL_USER: ${DB_USER:-taskflow}
      MYSQL_PASSWORD: ${DB_PASSWORD:-taskflow_pass}
    ports:
      - "3306:3306"
    volumes:
      - mysql_data:/var/lib/mysql
    healthcheck:
      test: ["CMD", "mysqladmin", "ping", "-h", "localhost"]
      interval: 10s
      timeout: 5s
      retries: 5

  redis:
    image: redis:7-alpine
    container_name: taskflow-redis
    ports:
      - "6379:6379"
    volumes:
      - redis_data:/data
    healthcheck:
      test: ["CMD", "redis-cli", "ping"]
      interval: 10s
      timeout: 5s
      retries: 5

  backend:
    build:
      context: ./backend
      dockerfile: Dockerfile
    container_name: taskflow-backend
    ports:
      - "8000:8000"
    volumes:
      - ./backend:/app
    environment:
      DATABASE_URL: mysql+asyncmy://${DB_USER:-taskflow}:${DB_PASSWORD:-taskflow_pass}@db:3306/${DB_NAME:-taskflow}
      REDIS_URL: redis://redis:6379/0
      JWT_SECRET: ${JWT_SECRET:-dev-secret-key}
    depends_on:
      db:
        condition: service_healthy
      redis:
        condition: service_healthy
    healthcheck:
      test: ["CMD", "curl", "-f", "http://localhost:8000/health"]
      interval: 10s
      timeout: 5s
      retries: 5

  frontend:
    build:
      context: ./frontend
      dockerfile: Dockerfile
    container_name: taskflow-frontend
    ports:
      - "3000:3000"
    volumes:
      - ./frontend:/app
      - /app/node_modules
    environment:
      NEXT_PUBLIC_API_URL: http://localhost:8000
    depends_on:
      backend:
        condition: service_healthy

volumes:
  mysql_data:
  redis_data:</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-3">&#9745; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># コンテナを起動</span>
docker compose up -d

<span class="text-green-400"># 全コンテナが起動しているか確認</span>
docker compose ps

<span class="text-green-400"># 期待される出力:</span>
<span class="text-green-400"># taskflow-db        running (healthy)</span>
<span class="text-green-400"># taskflow-redis     running (healthy)</span>
<span class="text-green-400"># taskflow-backend   running (healthy)</span>
<span class="text-green-400"># taskflow-frontend  running</span>

<span class="text-green-400"># バックエンドの疎通確認</span>
curl http://localhost:8000/health

<span class="text-green-400"># フロントエンドの疎通確認</span>
curl http://localhost:3000</pre>
                </div>
            </div>

            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded mb-6">
                <h4 class="font-bold text-red-800 mb-3">よくあるエラー</h4>
                <ul class="space-y-2 text-sm">
                    <li><strong>ポート競合：</strong><code>Bind for 0.0.0.0:3306 failed: port is already allocated</code> → ローカルのMySQLを停止するか、compose.yamlのポートを変更</li>
                    <li><strong>DB接続失敗：</strong><code>Can't connect to MySQL server</code> → <code>depends_on</code>のhealthcheckが正しく設定されているか確認。<code>docker compose logs db</code>でログを確認</li>
                    <li><strong>ビルドエラー：</strong><code>failed to solve: dockerfile parse error</code> → Dockerfileの構文を確認。Claude Codeに「Dockerfileのビルドエラーを修正して」と指示</li>
                </ul>
            </div>
        </section>

        <!-- ステップ2: 認証機能の実装 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ2：認証機能の実装</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-3">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>JWT認証機能を実装してください。

【バックエンド（FastAPI）】
- POST /auth/register - ユーザー登録
  - メール、パスワード、表示名を受け取る
  - パスワードはbcryptでハッシュ化
- POST /auth/login - ログイン
  - メール＋パスワードでJWTトークンを発行
  - アクセストークン（15分）＋リフレッシュトークン（7日）
- GET /auth/me - 現在のユーザー情報
  - Authorizationヘッダーからトークンを検証
- POST /auth/refresh - トークンリフレッシュ

【フロントエンド（Next.js）】
- /login ログインページ
- /register 新規登録ページ
- Zustandで認証状態を管理
- axiosインターセプターでトークン自動付与
- 未認証時は/loginにリダイレクト

【テーブル設計】
- usersテーブル: id, email, password_hash, display_name, created_at, updated_at</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">Claude Codeが行うこと</h4>
                <ul class="space-y-2 text-sm">
                    <li>&#10003; <code>backend/app/models/user.py</code> - Userモデル</li>
                    <li>&#10003; <code>backend/app/routers/auth.py</code> - 認証エンドポイント</li>
                    <li>&#10003; <code>backend/app/core/security.py</code> - JWT・パスワード処理</li>
                    <li>&#10003; <code>backend/app/core/deps.py</code> - 認証依存関数</li>
                    <li>&#10003; <code>frontend/src/stores/authStore.ts</code> - Zustand認証ストア</li>
                    <li>&#10003; <code>frontend/src/app/login/page.tsx</code> - ログインページ</li>
                    <li>&#10003; <code>frontend/src/app/register/page.tsx</code> - 登録ページ</li>
                    <li>&#10003; <code>frontend/src/lib/axios.ts</code> - axiosインスタンス設定</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：バックエンド認証エンドポイント</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/app/routers/auth.py</span>
from fastapi import APIRouter, Depends, HTTPException, status
from sqlalchemy.ext.asyncio import AsyncSession
from app.core.deps import get_db, get_current_user
from app.core.security import (
    hash_password, verify_password,
    create_access_token, create_refresh_token
)
from app.models.user import User
from app.schemas.auth import (
    UserRegister, UserLogin, TokenResponse, UserResponse
)

router = APIRouter(prefix="/auth", tags=["auth"])

@router.post("/register", response_model=UserResponse)
async def register(data: UserRegister, db: AsyncSession = Depends(get_db)):
    <span class="text-green-400"># メール重複チェック</span>
    existing = await User.get_by_email(db, data.email)
    if existing:
        raise HTTPException(
            status_code=status.HTTP_400_BAD_REQUEST,
            detail="このメールアドレスは既に登録されています"
        )
    user = User(
        email=data.email,
        password_hash=hash_password(data.password),
        display_name=data.display_name,
    )
    db.add(user)
    await db.commit()
    await db.refresh(user)
    return user

@router.post("/login", response_model=TokenResponse)
async def login(data: UserLogin, db: AsyncSession = Depends(get_db)):
    user = await User.get_by_email(db, data.email)
    if not user or not verify_password(data.password, user.password_hash):
        raise HTTPException(
            status_code=status.HTTP_401_UNAUTHORIZED,
            detail="メールアドレスまたはパスワードが正しくありません"
        )
    return TokenResponse(
        access_token=create_access_token(user.id),
        refresh_token=create_refresh_token(user.id),
        token_type="bearer",
    )

@router.get("/me", response_model=UserResponse)
async def get_me(current_user: User = Depends(get_current_user)):
    return current_user</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：フロントエンド認証ストア</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/stores/authStore.ts</span>
import { create } from 'zustand';
import { persist } from 'zustand/middleware';
import axios from '@/lib/axios';

interface User {
  id: number;
  email: string;
  display_name: string;
}

interface AuthState {
  user: User | null;
  token: string | null;
  isLoading: boolean;
  login: (email: string, password: string) =&gt; Promise&lt;void&gt;;
  register: (email: string, password: string, displayName: string) =&gt; Promise&lt;void&gt;;
  logout: () =&gt; void;
  fetchUser: () =&gt; Promise&lt;void&gt;;
}

export const useAuthStore = create&lt;AuthState&gt;()(
  persist(
    (set, get) =&gt; ({
      user: null,
      token: null,
      isLoading: false,

      login: async (email, password) =&gt; {
        const res = await axios.post('/auth/login', { email, password });
        set({ token: res.data.access_token });
        await get().fetchUser();
      },

      register: async (email, password, displayName) =&gt; {
        await axios.post('/auth/register', {
          email, password, display_name: displayName,
        });
        await get().login(email, password);
      },

      logout: () =&gt; {
        set({ user: null, token: null });
      },

      fetchUser: async () =&gt; {
        set({ isLoading: true });
        try {
          const res = await axios.get('/auth/me');
          set({ user: res.data });
        } catch {
          set({ user: null, token: null });
        } finally {
          set({ isLoading: false });
        }
      },
    }),
    { name: 'auth-storage' }
  )
);</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-3">&#9745; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># 1. Swagger UIで確認</span>
<span class="text-green-400"># ブラウザで http://localhost:8000/docs を開く</span>

<span class="text-green-400"># 2. ユーザー登録をテスト</span>
curl -X POST http://localhost:8000/auth/register \
  -H "Content-Type: application/json" \
  -d '{"email":"test@example.com","password":"password123","display_name":"テストユーザー"}'

<span class="text-green-400"># 3. ログインをテスト</span>
curl -X POST http://localhost:8000/auth/login \
  -H "Content-Type: application/json" \
  -d '{"email":"test@example.com","password":"password123"}'

<span class="text-green-400"># 4. トークンを使って /auth/me を確認</span>
curl http://localhost:8000/auth/me \
  -H "Authorization: Bearer &lt;取得したトークン&gt;"

<span class="text-green-400"># 5. フロントエンド確認</span>
<span class="text-green-400"># ブラウザで http://localhost:3000/register にアクセス</span>
<span class="text-green-400"># ユーザー登録 → 自動ログイン → ダッシュボードへリダイレクト</span></pre>
                </div>
            </div>

            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded mb-6">
                <h4 class="font-bold text-red-800 mb-3">よくあるエラー</h4>
                <ul class="space-y-2 text-sm">
                    <li><strong>422 Validation Error：</strong>リクエストボディのフィールド名がスキーマと一致しているか確認。<code>display_name</code>のアンダースコアに注意</li>
                    <li><strong>401 Unauthorized：</strong>トークンの有効期限切れ、または<code>Authorization: Bearer</code>ヘッダーの形式を確認</li>
                    <li><strong>CORS エラー：</strong>FastAPIの<code>CORSMiddleware</code>に<code>http://localhost:3000</code>が許可されているか確認</li>
                </ul>
            </div>
        </section>

        <!-- ステップ3: プロジェクトCRUD -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ3：プロジェクトCRUD</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-3">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>プロジェクト管理のCRUD機能を実装してください。

【エンドポイント】
- GET /projects - 自分が参加しているプロジェクト一覧
- POST /projects - プロジェクト新規作成（作成者が自動的にownerになる）
- GET /projects/{id} - プロジェクト詳細
- PUT /projects/{id} - プロジェクト更新（ownerのみ）
- DELETE /projects/{id} - プロジェクト削除（ownerのみ）
- POST /projects/{id}/members - メンバー追加（ownerのみ）

【テーブル設計】
- projects: id, name, description, owner_id, created_at, updated_at
- project_members: id, project_id, user_id, role(owner/admin/member), joined_at

【フロントエンド】
- /projects 一覧ページ（カード表示）
- /projects/new 新規作成フォーム
- /projects/{id} プロジェクト詳細ページ

認証済みユーザーのみアクセス可能にしてください。
既存のauth機能のパターンに合わせて実装してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">Claude Codeが行うこと</h4>
                <ul class="space-y-2 text-sm">
                    <li>&#10003; <code>backend/app/models/project.py</code> - Project, ProjectMemberモデル</li>
                    <li>&#10003; <code>backend/app/routers/projects.py</code> - プロジェクトエンドポイント</li>
                    <li>&#10003; <code>backend/app/schemas/project.py</code> - リクエスト/レスポンススキーマ</li>
                    <li>&#10003; <code>frontend/src/app/projects/page.tsx</code> - プロジェクト一覧</li>
                    <li>&#10003; <code>frontend/src/app/projects/new/page.tsx</code> - 新規作成フォーム</li>
                    <li>&#10003; <code>frontend/src/app/projects/[id]/page.tsx</code> - プロジェクト詳細</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：プロジェクトモデル</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/app/models/project.py</span>
from sqlalchemy import Column, Integer, String, Text, ForeignKey, DateTime, Enum
from sqlalchemy.orm import relationship
from datetime import datetime
import enum
from app.core.database import Base

class MemberRole(str, enum.Enum):
    owner = "owner"
    admin = "admin"
    member = "member"

class Project(Base):
    __tablename__ = "projects"

    id = Column(Integer, primary_key=True, index=True)
    name = Column(String(255), nullable=False)
    description = Column(Text, nullable=True)
    owner_id = Column(Integer, ForeignKey("users.id"), nullable=False)
    created_at = Column(DateTime, default=datetime.utcnow)
    updated_at = Column(DateTime, default=datetime.utcnow, onupdate=datetime.utcnow)

    owner = relationship("User", back_populates="owned_projects")
    members = relationship("ProjectMember", back_populates="project", cascade="all, delete-orphan")
    tasks = relationship("Task", back_populates="project", cascade="all, delete-orphan")

class ProjectMember(Base):
    __tablename__ = "project_members"

    id = Column(Integer, primary_key=True, index=True)
    project_id = Column(Integer, ForeignKey("projects.id"), nullable=False)
    user_id = Column(Integer, ForeignKey("users.id"), nullable=False)
    role = Column(Enum(MemberRole), default=MemberRole.member)
    joined_at = Column(DateTime, default=datetime.utcnow)

    project = relationship("Project", back_populates="members")
    user = relationship("User")</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-3">&#9745; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># 1. プロジェクト作成</span>
curl -X POST http://localhost:8000/projects \
  -H "Authorization: Bearer &lt;トークン&gt;" \
  -H "Content-Type: application/json" \
  -d '{"name":"マイプロジェクト","description":"テスト用プロジェクト"}'

<span class="text-green-400"># 2. プロジェクト一覧取得</span>
curl http://localhost:8000/projects \
  -H "Authorization: Bearer &lt;トークン&gt;"

<span class="text-green-400"># 3. プロジェクト詳細取得</span>
curl http://localhost:8000/projects/1 \
  -H "Authorization: Bearer &lt;トークン&gt;"

<span class="text-green-400"># 4. メンバー追加</span>
curl -X POST http://localhost:8000/projects/1/members \
  -H "Authorization: Bearer &lt;トークン&gt;" \
  -H "Content-Type: application/json" \
  -d '{"user_id":2,"role":"member"}'

<span class="text-green-400"># 5. フロントエンドで確認</span>
<span class="text-green-400"># http://localhost:3000/projects にアクセス</span>
<span class="text-green-400"># プロジェクトカードが表示されることを確認</span></pre>
                </div>
            </div>
        </section>

        <!-- ステップ4: タスクCRUD -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ4：タスクCRUD</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-3">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>タスク管理のCRUD機能を実装してください。

【エンドポイント】
- GET /projects/{id}/tasks - プロジェクト内のタスク一覧（ステータス別）
- POST /projects/{id}/tasks - タスク新規作成
- PUT /tasks/{id} - タスク更新
- DELETE /tasks/{id} - タスク削除
- PUT /tasks/{id}/status - ステータス変更（カンバン移動用）

【テーブル設計】
- tasks: id, title, description, status, priority, assignee_id, project_id, position, created_at, updated_at
- status: "todo" | "in_progress" | "done"
- priority: "low" | "medium" | "high"
- positionはカンバンボード内の並び順（整数値）

【フロントエンド】
- タスク作成モーダル
- タスク編集モーダル
- タスク削除確認ダイアログ

プロジェクトメンバーのみタスク操作可能にしてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">Claude Codeが行うこと</h4>
                <ul class="space-y-2 text-sm">
                    <li>&#10003; <code>backend/app/models/task.py</code> - Taskモデル</li>
                    <li>&#10003; <code>backend/app/routers/tasks.py</code> - タスクエンドポイント</li>
                    <li>&#10003; <code>backend/app/schemas/task.py</code> - リクエスト/レスポンススキーマ</li>
                    <li>&#10003; <code>frontend/src/components/tasks/TaskCreateModal.tsx</code> - タスク作成モーダル</li>
                    <li>&#10003; <code>frontend/src/components/tasks/TaskEditModal.tsx</code> - タスク編集モーダル</li>
                    <li>&#10003; <code>frontend/src/stores/taskStore.ts</code> - Zustandタスクストア</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：タスクモデル</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/app/models/task.py</span>
from sqlalchemy import Column, Integer, String, Text, ForeignKey, DateTime, Enum
from sqlalchemy.orm import relationship
from datetime import datetime
import enum
from app.core.database import Base

class TaskStatus(str, enum.Enum):
    todo = "todo"
    in_progress = "in_progress"
    done = "done"

class TaskPriority(str, enum.Enum):
    low = "low"
    medium = "medium"
    high = "high"

class Task(Base):
    __tablename__ = "tasks"

    id = Column(Integer, primary_key=True, index=True)
    title = Column(String(255), nullable=False)
    description = Column(Text, nullable=True)
    status = Column(Enum(TaskStatus), default=TaskStatus.todo)
    priority = Column(Enum(TaskPriority), default=TaskPriority.medium)
    assignee_id = Column(Integer, ForeignKey("users.id"), nullable=True)
    project_id = Column(Integer, ForeignKey("projects.id"), nullable=False)
    position = Column(Integer, default=0)
    created_at = Column(DateTime, default=datetime.utcnow)
    updated_at = Column(DateTime, default=datetime.utcnow, onupdate=datetime.utcnow)

    project = relationship("Project", back_populates="tasks")
    assignee = relationship("User")</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：ステータス変更エンドポイント</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># backend/app/routers/tasks.py（抜粋）</span>
@router.put("/{task_id}/status")
async def update_task_status(
    task_id: int,
    data: TaskStatusUpdate,
    db: AsyncSession = Depends(get_db),
    current_user: User = Depends(get_current_user),
):
    task = await db.get(Task, task_id)
    if not task:
        raise HTTPException(status_code=404, detail="タスクが見つかりません")

    <span class="text-green-400"># プロジェクトメンバーか確認</span>
    await verify_project_member(db, task.project_id, current_user.id)

    task.status = data.status
    task.position = data.position
    task.updated_at = datetime.utcnow()
    await db.commit()
    await db.refresh(task)
    return task</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-3">&#9745; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># 1. タスク作成</span>
curl -X POST http://localhost:8000/projects/1/tasks \
  -H "Authorization: Bearer &lt;トークン&gt;" \
  -H "Content-Type: application/json" \
  -d '{"title":"初めてのタスク","description":"テスト","priority":"high"}'

<span class="text-green-400"># 2. タスク一覧取得</span>
curl http://localhost:8000/projects/1/tasks \
  -H "Authorization: Bearer &lt;トークン&gt;"

<span class="text-green-400"># 3. ステータス変更（todo → in_progress）</span>
curl -X PUT http://localhost:8000/tasks/1/status \
  -H "Authorization: Bearer &lt;トークン&gt;" \
  -H "Content-Type: application/json" \
  -d '{"status":"in_progress","position":0}'

<span class="text-green-400"># 4. タスク更新</span>
curl -X PUT http://localhost:8000/tasks/1 \
  -H "Authorization: Bearer &lt;トークン&gt;" \
  -H "Content-Type: application/json" \
  -d '{"title":"更新されたタスク","priority":"medium"}'

<span class="text-green-400"># 5. ステータス別にタスクが取得できることを確認</span>
<span class="text-green-400"># レスポンスでtodo/in_progress/doneのグループ分けを確認</span></pre>
                </div>
            </div>

            <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded mb-6">
                <h4 class="font-bold text-red-800 mb-3">よくあるエラー</h4>
                <ul class="space-y-2 text-sm">
                    <li><strong>403 Forbidden：</strong>プロジェクトメンバーでないユーザーがタスクを操作しようとした場合。<code>project_members</code>テーブルにレコードがあるか確認</li>
                    <li><strong>position重複：</strong>カンバン移動時にpositionが重複する場合は、同一ステータス内のpositionを再計算するロジックを追加</li>
                </ul>
            </div>
        </section>

        <!-- ステップ5: カンバンボードUI -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ステップ5：カンバンボードUI</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded mb-6">
                <h4 class="font-bold text-indigo-800 mb-3">Claude Codeへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>カンバンボードUIを実装してください。

【コンポーネント構成】
- KanbanBoard - ボード全体（3カラム表示）
- KanbanColumn - 各ステータスのカラム（Todo / In Progress / Done）
- TaskCard - 個別タスクカード

【要件】
- TanStack Queryでタスクデータをフェッチ
- Zustandでローカルのタスク状態を管理
- カラム間のドラッグ＆ドロップ（Phase 2で本格実装、今はボタンで移動）
- タスクカードにはタイトル、優先度バッジ、担当者アバターを表示
- 優先度に応じた色分け（high: 赤, medium: 黄, low: 緑）
- レスポンシブ対応（モバイルではカラムを縦並び）

【データフェッチ】
- useQueryでGET /projects/{id}/tasks を取得
- useMutationでステータス変更を即座に反映（楽観的更新）

プロジェクト詳細ページ /projects/{id} にカンバンボードを表示してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">Claude Codeが行うこと</h4>
                <ul class="space-y-2 text-sm">
                    <li>&#10003; <code>frontend/src/components/kanban/KanbanBoard.tsx</code> - ボード全体</li>
                    <li>&#10003; <code>frontend/src/components/kanban/KanbanColumn.tsx</code> - カラムコンポーネント</li>
                    <li>&#10003; <code>frontend/src/components/kanban/TaskCard.tsx</code> - タスクカード</li>
                    <li>&#10003; <code>frontend/src/hooks/useTasks.ts</code> - TanStack Queryフック</li>
                    <li>&#10003; <code>frontend/src/stores/taskStore.ts</code> - Zustandストア更新</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：カンバンボードコンポーネント</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/components/kanban/KanbanBoard.tsx</span>
'use client';

import { useTasks } from '@/hooks/useTasks';
import { KanbanColumn } from './KanbanColumn';

const COLUMNS = [
  { id: 'todo', title: 'Todo', color: 'bg-gray-100' },
  { id: 'in_progress', title: 'In Progress', color: 'bg-blue-50' },
  { id: 'done', title: 'Done', color: 'bg-green-50' },
] as const;

interface KanbanBoardProps {
  projectId: number;
}

export function KanbanBoard({ projectId }: KanbanBoardProps) {
  const { tasks, isLoading, updateTaskStatus } = useTasks(projectId);

  if (isLoading) {
    return &lt;div className="text-center py-12"&gt;読み込み中...&lt;/div&gt;;
  }

  const tasksByStatus = {
    todo: tasks.filter(t =&gt; t.status === 'todo'),
    in_progress: tasks.filter(t =&gt; t.status === 'in_progress'),
    done: tasks.filter(t =&gt; t.status === 'done'),
  };

  return (
    &lt;div className="grid grid-cols-1 md:grid-cols-3 gap-6"&gt;
      {COLUMNS.map(column =&gt; (
        &lt;KanbanColumn
          key={column.id}
          title={column.title}
          color={column.color}
          tasks={tasksByStatus[column.id]}
          onMoveTask={updateTaskStatus}
        /&gt;
      ))}
    &lt;/div&gt;
  );
}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h4 class="font-bold mb-3">完成コード：TanStack Queryフック</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400">// frontend/src/hooks/useTasks.ts</span>
import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import axios from '@/lib/axios';
import { Task, TaskStatus } from '@/types/task';

export function useTasks(projectId: number) {
  const queryClient = useQueryClient();

  const { data: tasks = [], isLoading } = useQuery&lt;Task[]&gt;({
    queryKey: ['tasks', projectId],
    queryFn: async () =&gt; {
      const res = await axios.get(`/projects/${projectId}/tasks`);
      return res.data;
    },
  });

  const { mutate: updateTaskStatus } = useMutation({
    mutationFn: async ({
      taskId, status, position,
    }: {
      taskId: number; status: TaskStatus; position: number;
    }) =&gt; {
      await axios.put(`/tasks/${taskId}/status`, { status, position });
    },
    <span class="text-green-400">// 楽観的更新</span>
    onMutate: async ({ taskId, status, position }) =&gt; {
      await queryClient.cancelQueries({ queryKey: ['tasks', projectId] });
      const previous = queryClient.getQueryData&lt;Task[]&gt;(['tasks', projectId]);

      queryClient.setQueryData&lt;Task[]&gt;(['tasks', projectId], old =&gt;
        old?.map(t =&gt;
          t.id === taskId ? { ...t, status, position } : t
        )
      );
      return { previous };
    },
    onError: (_err, _vars, context) =&gt; {
      queryClient.setQueryData(['tasks', projectId], context?.previous);
    },
    onSettled: () =&gt; {
      queryClient.invalidateQueries({ queryKey: ['tasks', projectId] });
    },
  });

  return { tasks, isLoading, updateTaskStatus };
}</pre>
                </div>
            </div>

            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded mb-6">
                <h4 class="font-bold text-green-800 mb-3">&#9745; 動作確認</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># 1. ブラウザで http://localhost:3000/projects/1 にアクセス</span>
<span class="text-green-400"># 2. カンバンボードが3カラムで表示されることを確認</span>
<span class="text-green-400"># 3. タスクカードが正しいカラムに表示されていることを確認</span>
<span class="text-green-400"># 4. 「新しいタスク」ボタンからタスク作成モーダルを開く</span>
<span class="text-green-400"># 5. タスクを作成し、Todoカラムに追加されることを確認</span>
<span class="text-green-400"># 6. タスクカードの移動ボタンでステータスを変更</span>
<span class="text-green-400">#    例：Todoのタスクを「In Progress」に移動</span>
<span class="text-green-400"># 7. 優先度バッジの色分けを確認（赤/黄/緑）</span>
<span class="text-green-400"># 8. モバイル表示（ブラウザ幅を縮小）でカラムが縦並びになることを確認</span>
<span class="text-green-400">#</span>
<span class="text-green-400"># ※ ドラッグ＆ドロップはPhase 2で実装します</span></pre>
                </div>
            </div>
        </section>

        <!-- 実装のポイント -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Phase 1 実装のポイント</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-3 text-sm">
                    <li>&#10003; <strong>段階的に進める</strong> - 1機能ずつ動作確認しながら次へ進む。エラーを積み残さない</li>
                    <li>&#10003; <strong>エージェントモードを活用</strong> - Claude CodeのPlan Modeで全体像を把握してからコード生成</li>
                    <li>&#10003; <strong>こまめにコミット</strong> - 機能単位でGitコミットを作成。<code>git commit -m "feat: 認証機能を追加"</code></li>
                    <li>&#10003; <strong>テストも一緒に</strong> - 各エンドポイントの実装時にテストコードも依頼する</li>
                    <li>&#10003; <strong>エラーはAIに投げる</strong> - エラーメッセージをそのままClaude Codeに貼り付けて修正を依頼</li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="project-architecture.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                アーキテクチャ決定
            </a>
            <a href="project-impl2.php" class="flex items-center bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-600">
                次へ：実装フェーズ2
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
