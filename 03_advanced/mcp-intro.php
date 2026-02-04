<?php
$page_title = 'MCP入門 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第7部：AIツールの拡張';
$step_number = 23;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">MCP入門</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Model Context Protocol (MCP) を使って、Claude Code に外部ツールやデータベースを接続し、AIの能力を拡張します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">MCPとは</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">MCP (Model Context Protocol) は、AIモデルに外部ツールやデータソースへのアクセスを提供する標準プロトコルです。</p>
                <div class="grid md:grid-cols-3 gap-4 text-sm">
                    <div class="p-3 bg-blue-50 rounded">
                        <h4 class="font-bold">データベース接続</h4>
                        <p>SQLを直接実行</p>
                    </div>
                    <div class="p-3 bg-green-50 rounded">
                        <h4 class="font-bold">外部API</h4>
                        <p>Slack、GitHub等と連携</p>
                    </div>
                    <div class="p-3 bg-purple-50 rounded">
                        <h4 class="font-bold">ファイルシステム</h4>
                        <p>特定ディレクトリへのアクセス</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">MCPサーバーの設定</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">設定ファイル（~/.claude/claude_desktop_config.json）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>{
  "mcpServers": {
    "sqlite": {
      "command": "uvx",
      "args": ["mcp-server-sqlite", "--db-path", "./database.db"]
    },
    "github": {
      "command": "npx",
      "args": ["-y", "@modelcontextprotocol/server-github"],
      "env": {
        "GITHUB_PERSONAL_ACCESS_TOKEN": "ghp_xxxx"
      }
    }
  }
}</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">利用可能なMCPサーバー</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">mcp-server-sqlite</h3>
                    <p class="text-sm text-gray-600">SQLiteデータベースに接続</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">mcp-server-github</h3>
                    <p class="text-sm text-gray-600">GitHub API操作</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">mcp-server-slack</h3>
                    <p class="text-sm text-gray-600">Slackメッセージ送信</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">mcp-server-filesystem</h3>
                    <p class="text-sm text-gray-600">ファイル操作</p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">使用例</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># Claude Code でDBに直接クエリ
> データベースのusersテーブルから、今月登録したユーザー数を教えて

# GitHub Issue作成
> このバグについて GitHub Issue を作成して</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>MCPで拡張</strong> - AIに外部ツールへのアクセスを提供</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>設定ファイル</strong> - JSONでサーバーを定義</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>公式サーバー</strong> - SQLite、GitHub、Slack等</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="incident-response.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                障害対応とデバッグ
            </a>
            <a href="custom-mcp.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：カスタムMCPサーバー作成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
