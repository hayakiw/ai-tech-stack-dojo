<?php
$page_title = 'AIでドキュメント生成 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第8部：チーム開発でのAI活用';
$step_number = 27;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでドキュメント生成</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">API仕様書、README、ADR（アーキテクチャ決定記録）など、ドキュメントをAIに生成させます。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">README 自動生成</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このプロジェクトの README.md を生成してください。

【含める内容】
- プロジェクト概要
- 技術スタック
- セットアップ手順
- 開発コマンド
- ディレクトリ構造
- 環境変数

package.json と docker-compose.yml を参考にしてください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">API仕様書生成</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>backend/app/api/ のエンドポイントから
OpenAPI形式のAPI仕様書を生成してください。

各エンドポイントの説明、リクエスト/レスポンス例を含めてください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ADR（アーキテクチャ決定記録）</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>状態管理にZustandを採用した決定について、ADRを作成してください。

【フォーマット】
# ADR-XXX: タイトル
## ステータス
## コンテキスト
## 決定
## 選択肢
## 結果</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>README</strong> - プロジェクト情報から自動生成</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>API仕様書</strong> - コードから仕様を抽出</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>ADR</strong> - 技術決定を記録</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="cursor-rules.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Cursor Rules活用
            </a>
            <a href="legacy-code.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：レガシーコードの理解
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
