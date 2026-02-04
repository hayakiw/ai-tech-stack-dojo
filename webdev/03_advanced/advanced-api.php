<?php
$page_title = 'API設計の高度化 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'architecture';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第3部：AIとバックエンド高度化';
$step_number = 11;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">API設計の高度化</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">GraphQL、WebSocket、Server-Sent Events など、高度なAPI技術をAIと一緒に実装します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">WebSocket によるリアルタイム通信</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>FastAPI で WebSocket を使ったリアルタイムチャット機能を実装してください。

【要件】
- ルームごとにメッセージを配信
- 接続・切断の管理
- 認証済みユーザーのみ接続可能</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">WebSocket 実装例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from fastapi import WebSocket, WebSocketDisconnect

class ConnectionManager:
    def __init__(self):
        self.active_connections: dict[str, list[WebSocket]] = {}

    async def connect(self, websocket: WebSocket, room_id: str):
        await websocket.accept()
        if room_id not in self.active_connections:
            self.active_connections[room_id] = []
        self.active_connections[room_id].append(websocket)

    async def broadcast(self, room_id: str, message: str):
        for connection in self.active_connections.get(room_id, []):
            await connection.send_text(message)

manager = ConnectionManager()

@app.websocket("/ws/{room_id}")
async def websocket_endpoint(websocket: WebSocket, room_id: str):
    await manager.connect(websocket, room_id)
    try:
        while True:
            data = await websocket.receive_text()
            await manager.broadcast(room_id, data)
    except WebSocketDisconnect:
        manager.disconnect(websocket, room_id)</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">GraphQL の導入</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">REST vs GraphQL</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div class="p-3 bg-blue-50 rounded">
                        <h4 class="font-bold">REST</h4>
                        <ul class="mt-2 space-y-1">
                            <li>・エンドポイントごとに固定レスポンス</li>
                            <li>・オーバーフェッチ/アンダーフェッチ</li>
                            <li>・シンプルで理解しやすい</li>
                        </ul>
                    </div>
                    <div class="p-3 bg-purple-50 rounded">
                        <h4 class="font-bold">GraphQL</h4>
                        <ul class="mt-2 space-y-1">
                            <li>・クライアントが必要なデータを指定</li>
                            <li>・1リクエストで複数リソース取得</li>
                            <li>・学習コストがある</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>Strawberry (Python GraphQL) を使って、
既存のFastAPI RESTエンドポイントをGraphQLに変換してください。

User と Post の関連を持つスキーマを定義してください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>WebSocket</strong> - 双方向リアルタイム通信に最適</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>SSE</strong> - サーバーからの一方向プッシュに</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>GraphQL</strong> - 柔軟なデータ取得が必要な場合に</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="db-optimization.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                データベース最適化
            </a>
            <a href="frontend-performance.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：パフォーマンス改善
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
