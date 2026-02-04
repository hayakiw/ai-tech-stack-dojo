<?php
$page_title = 'カスタムMCPサーバー作成 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第7部：AIツールの拡張';
$step_number = 24;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">カスタムMCPサーバー作成</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">自社のAPIやデータベースをClaude Codeから操作できるよう、独自のMCPサーバーを作成します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">MCPサーバーの構造</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># Python (mcp パッケージ使用)
from mcp.server import Server
from mcp.types import Tool

server = Server("my-custom-server")

@server.tool()
async def get_user_stats(user_id: str) -> dict:
    """ユーザーの統計情報を取得"""
    # 実装
    return {"user_id": user_id, "posts": 42}

if __name__ == "__main__":
    server.run()</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIにサーバー作成を依頼</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>社内のユーザー管理APIをClaude Codeから操作できる
MCPサーバーを作成してください。

【機能】
- ユーザー検索 (search_users)
- ユーザー詳細取得 (get_user)
- ユーザー更新 (update_user)

【API仕様】
- Base URL: https://api.internal.example.com
- 認証: Bearer token
- GET /users?q={query}
- GET /users/{id}
- PATCH /users/{id}</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">設定と使用</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">設定追加</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>{
  "mcpServers": {
    "internal-api": {
      "command": "python",
      "args": ["./mcp-servers/internal-api/server.py"],
      "env": {
        "API_TOKEN": "xxx"
      }
    }
  }
}</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>カスタムサーバー</strong> - 社内ツールをAIに接続</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>@server.tool()</strong> - 関数をツールとして公開</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>AIに作成依頼</strong> - 仕様を伝えてサーバー生成</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="mcp-intro.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                MCP入門
            </a>
            <a href="claude-code-hooks.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：Claude Code Hooks
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
