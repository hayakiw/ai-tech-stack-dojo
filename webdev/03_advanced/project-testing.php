<?php
$page_title = 'テスト・CI/CD - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 35;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">テスト・CI/CD構築</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">AIと一緒にテストを書き、CI/CDパイプラインを構築します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">テスト戦略</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="p-3 bg-gray-50 rounded">
                        <h4 class="font-bold">単体テスト（pytest）</h4>
                        <p class="text-sm">サービス層、リポジトリ層のテスト</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <h4 class="font-bold">APIテスト（pytest + httpx）</h4>
                        <p class="text-sm">エンドポイントの統合テスト</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <h4 class="font-bold">E2Eテスト（Playwright）</h4>
                        <p class="text-sm">主要ユーザーフローのテスト</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">AIへの指示例</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">テストコード生成</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>タスクサービスのテストを書いてください。

【テスト対象】
backend/app/services/task_service.py

【テストケース】
- タスク作成（正常系、バリデーションエラー）
- タスク更新（正常系、権限エラー）
- ステータス変更のビジネスルール

モックを適切に使用してください。</pre>
                </div>
            </div>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">CI/CD構築</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>GitHub Actions でCI/CDを構築してください。

【CI（PR時）】
- lint、型チェック、テスト
- フロント・バック並列実行

【CD（mainマージ時）】
- Vercel（フロント）
- Railway（バック）</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">テストカバレッジ目標</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="text-sm space-y-2">
                    <li>・サービス層: 80%以上</li>
                    <li>・API層: 主要エンドポイント100%</li>
                    <li>・E2E: 主要フロー（認証、タスク操作）</li>
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
