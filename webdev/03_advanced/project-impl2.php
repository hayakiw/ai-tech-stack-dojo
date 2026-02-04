<?php
$page_title = '実装フェーズ2 - 実践プロジェクト - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第9部：実践プロジェクト';
$step_number = 34;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">実装フェーズ2：高度な機能</h1>

        <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
            <p class="text-lg">ドラッグ&ドロップ、リアルタイム同期など、高度な機能をAIと実装します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">Phase 2 で実装する機能</h2>
            <div class="space-y-2">
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">1</span>
                    <span>ドラッグ&ドロップ（dnd-kit）</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">2</span>
                    <span>WebSocketによるリアルタイム同期</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">3</span>
                    <span>楽観的更新（Optimistic Update）</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow flex items-center">
                    <span class="bg-purple-500 text-white w-6 h-6 rounded-full flex items-center justify-center text-sm mr-3">4</span>
                    <span>チームメンバー招待機能</span>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">AIへの指示例</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">リアルタイム同期</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>WebSocketでリアルタイム同期を実装してください。

【要件】
- タスクの作成・更新・削除を他のユーザーに即時反映
- プロジェクトごとにルーム分け
- 接続/切断時の処理

【バックエンド】
- FastAPIのWebSocket機能を使用
- Redisでメッセージをブロードキャスト

【フロントエンド】
- useWebSocketフックを作成
- TanStack Queryのキャッシュを更新</pre>
                </div>
            </div>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">ドラッグ&ドロップ</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>@dnd-kit/core を使ってカンバンのドラッグ&ドロップを実装してください。

【要件】
- タスクをカラム間で移動
- 同一カラム内で順序変更
- ドロップ時にAPIでステータス更新
- 楽観的更新（即座にUIを更新、失敗時はロールバック）</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">実装時の注意点</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-2 text-sm">
                    <li>・<strong>競合状態に注意</strong> - 同時編集時の整合性</li>
                    <li>・<strong>エラー時のリカバリ</strong> - 楽観的更新失敗時の処理</li>
                    <li>・<strong>接続断の対応</strong> - 再接続ロジック</li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="project-impl1.php" class="flex items-center text-gray-600 hover:text-purple-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                実装フェーズ1
            </a>
            <a href="project-testing.php" class="flex items-center bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-600">
                次へ：テスト・CI/CD
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
