<?php
$page_title = 'アーキテクチャ決定 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 32;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">アーキテクチャ決定</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">AIと技術選定を行い、プロジェクトのアーキテクチャを決定します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">AIと技術選定</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの相談</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>TaskFlowのアーキテクチャを相談させてください。

【要件】
- リアルタイム同期が必要
- 同時接続100人程度
- チーム開発しやすい構造

【質問】
1. リアルタイム同期: WebSocket vs SSE vs ポーリング？
2. 状態管理: Zustand vs TanStack Query vs Context？
3. バックエンド構成: モノリス vs マイクロサービス？

各選択肢のトレードオフを教えてください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">決定事項</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold">リアルタイム: WebSocket</h4>
                        <p class="text-sm text-gray-600">双方向通信が必要なため。FastAPIの組み込みWebSocketを使用。</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold">状態管理: Zustand + TanStack Query</h4>
                        <p class="text-sm text-gray-600">サーバー状態はTanStack Query、UIの状態はZustand。</p>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold">バックエンド: モノリス + レイヤードアーキテクチャ</h4>
                        <p class="text-sm text-gray-600">規模的にモノリスで十分。API/Service/Repository層で分離。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ディレクトリ構成</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>taskflow/
├── frontend/
│   ├── src/
│   │   ├── app/              # Next.js App Router
│   │   ├── components/       # 共通コンポーネント
│   │   ├── features/         # 機能別モジュール
│   │   │   ├── auth/
│   │   │   ├── projects/
│   │   │   └── tasks/
│   │   ├── hooks/
│   │   └── lib/
│   └── ...
├── backend/
│   ├── app/
│   │   ├── api/              # エンドポイント
│   │   ├── services/         # ビジネスロジック
│   │   ├── repositories/     # データアクセス
│   │   ├── models/           # SQLAlchemyモデル
│   │   └── websocket/        # WebSocket処理
│   └── ...
└── docker-compose.yml</pre>
                </div>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="project-design.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                要件定義
            </a>
            <a href="project-impl1.php" class="flex items-center bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-600">
                次へ：実装フェーズ1
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
