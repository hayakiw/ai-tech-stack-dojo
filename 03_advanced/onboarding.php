<?php
$page_title = 'オンボーディング効率化 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第8部：チーム開発でのAI活用';
$step_number = 29;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">オンボーディング効率化</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">新メンバーがAIを活用してプロジェクトを素早く理解し、生産性を上げる方法を学びます。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">プロジェクト概要の把握</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">最初に聞くこと</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># Claude Code で
> このプロジェクトの概要を教えてください。
> どのような技術スタックを使っていますか？
> ディレクトリ構造を説明してください。
> 開発環境のセットアップ方法を教えてください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">コードベース探索</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre># 機能の場所を探す
> ユーザー認証はどのファイルで実装されていますか？

# 処理フローを理解
> 注文処理の流れを説明してください。

# 設定を確認
> 環境変数は何が必要ですか？</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">最初のタスクをAIと</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">段階的アプローチ</h3>
                <div class="space-y-2 text-sm">
                    <div class="p-2 bg-gray-50 rounded">1. まず既存コードを理解（AIに解説してもらう）</div>
                    <div class="p-2 bg-gray-50 rounded">2. 類似機能を参考に（AIに探させる）</div>
                    <div class="p-2 bg-gray-50 rounded">3. 実装をAIと一緒に進める</div>
                    <div class="p-2 bg-gray-50 rounded">4. レビューもAIに依頼</div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>概要把握</strong> - まず全体像をAIに聞く</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>コード探索</strong> - 機能の場所、処理フローを質問</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>段階的に</strong> - 理解→参考→実装→レビュー</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="legacy-code.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                レガシーコードの理解
            </a>
            <a href="git-ai.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：Git操作の効率化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
