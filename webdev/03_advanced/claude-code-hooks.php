<?php
$page_title = 'Claude Code Hooks - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第7部：AIツールの拡張';
$step_number = 25;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">Claude Code Hooks</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Claude Code の Hooks を使って、特定のイベント発生時にカスタム処理を実行します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Hooks とは</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">Claude Code の操作に応じて、シェルコマンドを自動実行する仕組みです。</p>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div class="p-3 bg-gray-50 rounded">
                        <h4 class="font-bold">PreToolUse</h4>
                        <p>ツール実行前に実行</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <h4 class="font-bold">PostToolUse</h4>
                        <p>ツール実行後に実行</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <h4 class="font-bold">Notification</h4>
                        <p>通知発生時に実行</p>
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <h4 class="font-bold">Stop</h4>
                        <p>セッション終了時に実行</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">設定例</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">.claude/settings.json</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>{
  "hooks": {
    "PostToolUse": [
      {
        "matcher": "Write|Edit",
        "command": "npm run lint:fix ${file}"
      }
    ],
    "Stop": [
      {
        "command": "say 'Claude Code が完了しました'"
      }
    ]
  }
}</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">活用例</h2>
            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">ファイル保存時に自動フォーマット</h3>
                    <p class="text-sm text-gray-600">Write/Edit 後に Prettier や Black を自動実行</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">コミット時に通知</h3>
                    <p class="text-sm text-gray-600">Bash(git commit) 後に Slack 通知</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">テスト自動実行</h3>
                    <p class="text-sm text-gray-600">ファイル変更後にテストを自動実行</p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>自動化</strong> - ファイル保存時のフォーマット等</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>通知</strong> - 作業完了時のSlack通知等</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>matcher</strong> - 特定ツールのみにフック</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="custom-mcp.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                カスタムMCPサーバー作成
            </a>
            <a href="cursor-rules.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：Cursor Rules活用
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
