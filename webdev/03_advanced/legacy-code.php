<?php
$page_title = 'レガシーコードの理解 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'mcp';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第8部：チーム開発でのAI活用';
$step_number = 28;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">レガシーコードの理解</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">複雑で理解しにくい既存コードをAIに解説させ、効率的にキャッチアップします。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">コードの解説を依頼</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このコードが何をしているか、以下の観点で解説してください。

1. 全体の目的
2. 主要な関数の役割
3. データの流れ
4. 外部との依存関係
5. 注意すべき点

```python
(レガシーコードを貼り付け)
```</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">依存関係の可視化</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このディレクトリのモジュール間の依存関係を
Mermaid形式で図示してください。

どのファイルがどのファイルをインポートしているか、
依存の方向がわかるようにしてください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">処理フローの理解</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>ユーザーがログインしてから、ダッシュボードが表示されるまでの
処理フローを説明してください。

関連するファイルと、各ステップで何が起きているかを
時系列で説明してください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>コード解説</strong> - 目的、役割、データフローを質問</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>依存関係</strong> - Mermaidで可視化</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>処理フロー</strong> - 時系列で理解</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-documentation.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                AIでドキュメント生成
            </a>
            <a href="onboarding.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：オンボーディング効率化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
