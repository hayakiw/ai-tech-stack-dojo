<?php
$page_title = '非同期処理の実装 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'architecture';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第3部：AIとバックエンド高度化';
$step_number = 8;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">非同期処理の実装</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">メール送信、画像処理、外部API連携など、時間のかかる処理をバックグラウンドで実行する方法をAIと一緒に実装します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">非同期処理が必要な場面</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">メール送信</h3>
                    <p class="text-sm text-gray-600">ユーザー登録時の確認メール、通知メールなど</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">画像・動画処理</h3>
                    <p class="text-sm text-gray-600">サムネイル生成、リサイズ、フォーマット変換</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">外部API連携</h3>
                    <p class="text-sm text-gray-600">決済処理、SNS投稿、Webhook送信</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">重い計算処理</h3>
                    <p class="text-sm text-gray-600">レポート生成、データ集計、AI推論</p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Celery + Redis による実装</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示：Celery環境構築</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>FastAPI + Celery + Redis で非同期タスク処理を実装したいです。

【環境】
- Docker Compose で構築
- Redis をメッセージブローカーとして使用
- 結果もRedisに保存

【タスク例】
- ユーザー登録時にウェルカムメールを送信
- 画像アップロード時にサムネイルを生成

以下を作成してください：
1. docker-compose.yml の追記
2. Celeryの設定ファイル
3. タスクの定義
4. FastAPIからタスクを呼び出す方法</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">docker-compose.yml</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>services:
  redis:
    image: redis:7-alpine
    ports:
      - "6379:6379"

  celery_worker:
    build: ./backend
    command: celery -A app.celery_app worker --loglevel=info
    depends_on:
      - redis
    environment:
      - CELERY_BROKER_URL=redis://redis:6379/0

  celery_beat:  # 定期実行用
    build: ./backend
    command: celery -A app.celery_app beat --loglevel=info
    depends_on:
      - redis</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">タスク定義例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># app/tasks/email.py
from app.celery_app import celery_app

@celery_app.task
def send_welcome_email(user_email: str, user_name: str):
    """ウェルカムメールを送信（非同期）"""
    # メール送信処理
    print(f"Sending welcome email to {user_email}")
    # ... 実際のメール送信処理
    return {"status": "sent", "email": user_email}</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">FastAPIから呼び出し</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># app/api/users.py
from app.tasks.email import send_welcome_email

@router.post("/users/")
async def create_user(user: UserCreate):
    # ユーザー作成
    new_user = await user_service.create(user)

    # 非同期でメール送信（すぐにレスポンスを返す）
    send_welcome_email.delay(new_user.email, new_user.name)

    return new_user</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">タスクの状態管理</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示：進捗追跡</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>非同期タスクの進捗をフロントエンドで確認できるようにしたいです。

【要件】
- タスクのID、状態（pending/running/completed/failed）、進捗率を取得
- フロントエンドからポーリングで状態確認
- 完了時に結果を取得

実装方法を教えてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">タスク状態確認API</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>@router.get("/tasks/{task_id}")
async def get_task_status(task_id: str):
    result = AsyncResult(task_id)
    return {
        "task_id": task_id,
        "status": result.status,
        "result": result.result if result.ready() else None
    }</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>時間のかかる処理は非同期化</strong> - ユーザーを待たせない</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>Celery + Redis</strong> - Python での定番構成</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>.delay() で呼び出し</strong> - 即座にレスポンスを返せる</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>状態追跡</strong> - AsyncResultで進捗確認</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-refactoring.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                既存コードのリファクタリング
            </a>
            <a href="cache-strategy.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：キャッシュ設計と実装
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
