<?php
$page_title = '障害対応とデバッグ - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'testing';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第6部：AIとDevOps';
$step_number = 22;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">障害対応とデバッグ</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">本番環境での障害発生時、AIにログを分析させて迅速に原因を特定・解決します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">障害対応の流れ</h2>
            <div class="space-y-3">
                <div class="bg-white p-4 rounded-lg shadow flex items-center">
                    <span class="bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">1</span>
                    <span><strong>検知</strong> - アラート発生、ユーザー報告</span>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-center">
                    <span class="bg-orange-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">2</span>
                    <span><strong>情報収集</strong> - ログ、メトリクス、エラー内容</span>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-center">
                    <span class="bg-yellow-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">3</span>
                    <span><strong>AIに分析依頼</strong> - 原因特定</span>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-center">
                    <span class="bg-green-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">4</span>
                    <span><strong>対応・修正</strong> - 緊急対応または根本解決</span>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIにログ分析を依頼</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">障害分析の依頼例</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>本番環境で500エラーが多発しています。
以下のログを分析して、原因と対策を教えてください。

【発生時刻】2024-01-15 14:30 JST から
【影響範囲】全ユーザーの約30%
【エラーログ】
```
[ERROR] 2024-01-15 14:30:12 Connection pool exhausted
[ERROR] 2024-01-15 14:30:13 TimeoutError: database connection
[ERROR] 2024-01-15 14:30:15 Connection pool exhausted
```

【直前の変更】
- 14:00 にデプロイ実施（新機能追加）</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">ポストモーテム作成</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>今回の障害についてポストモーテム（振り返り文書）を作成してください。

【フォーマット】
- 概要
- タイムライン
- 根本原因
- 影響
- 対応内容
- 再発防止策</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>情報を整理して渡す</strong> - 時刻、影響範囲、ログ</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>直前の変更を伝える</strong> - デプロイ、設定変更など</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>ポストモーテム</strong> - 再発防止のため振り返り</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="infrastructure-as-code.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                インフラ設定の自動化
            </a>
            <a href="mcp-intro.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：MCP入門
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
