<?php
$page_title = '実装フェーズ1 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 33;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">実装フェーズ1：コア機能</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">認証、プロジェクト、タスクのCRUDなど、コア機能をAIと実装します。</p>
        </div>

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

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">AIへの指示例</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">Docker環境構築</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>TaskFlowプロジェクトのDocker環境を構築してください。

【コンテナ構成】
- frontend: Next.js 14
- backend: FastAPI
- db: MySQL 8
- redis: キャッシュ・WebSocket用

docker-compose.yml とDockerfileを作成してください。</pre>
                </div>
            </div>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">認証機能</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>JWT認証を実装してください。

【バックエンド】
- POST /auth/register
- POST /auth/login
- GET /auth/me

【フロントエンド】
- /login ページ
- /register ページ
- 認証状態の管理（Zustand）

既存のパターンに合わせて実装してください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">実装のポイント</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-2 text-sm">
                    <li>・<strong>段階的に進める</strong> - 1機能ずつ動作確認しながら</li>
                    <li>・<strong>エージェントモードを活用</strong> - Plan Mode でまとめて実装</li>
                    <li>・<strong>こまめにコミット</strong> - 機能単位でGitコミット</li>
                    <li>・<strong>テストも一緒に</strong> - 実装と同時にテストを書く</li>
                </ul>
            </div>
        </section>

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
