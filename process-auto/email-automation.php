<?php
$page_title = 'メール自動化 - AI×業務自動化 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">メール自動化</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">メール対応は多くのビジネスパーソンの時間を奪う業務。返信作成、振り分け、フォローアップなど、AIと自動化ツールで効率化しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">メール自動化のパターン</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">1. 自動返信</h3>
                    <p class="text-sm text-gray-600 mb-3">特定の条件に合致するメールに自動で返信を送信</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>問い合わせメール受信時に「確認しました。〇営業日以内に回答します」と自動返信
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">2. 自動振り分け</h3>
                    <p class="text-sm text-gray-600 mb-3">メールの内容に応じて自動でラベル付け・フォルダ分類</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>「請求」を含むメール→経理フォルダ、「採用」を含むメール→人事フォルダ
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">3. 下書き自動作成</h3>
                    <p class="text-sm text-gray-600 mb-3">受信メールの内容をAIが分析し、返信の下書きを自動生成</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>顧客からの質問メールを受信→AIが回答案を下書きとして保存
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">4. フォローアップ自動化</h3>
                    <p class="text-sm text-gray-600 mb-3">一定期間返信がない場合に自動でリマインダーメールを送信</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>見積送付から3日経過→「ご検討いかがでしょうか」とフォローメール
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIでメール返信を効率化</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-violet-600">返信メール自動生成プロンプト</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">あなたはビジネスメールの作成アシスタントです。
以下のメールに対する返信を作成してください。

【受信メール】
---
{メール本文}
---

【返信の条件】
・トーン：丁寧かつ親しみやすい
・長さ：200文字程度
・必ず含める：お礼、質問への回答、次のステップ

【出力形式】
件名：
本文：</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">メール分類プロンプト</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のメールを分類してください。

【メール】
件名：{件名}
本文：{本文}

【分類カテゴリ】
1. 緊急対応（今日中に返信が必要）
2. 通常対応（1-2日以内に返信）
3. 情報共有（返信不要）
4. 迷惑メール

【出力形式】
カテゴリ：
理由：
推奨アクション：</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ツール別設定方法</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">Gmail</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• フィルタ機能で自動振り分け</li>
                        <li>• 不在通知で自動返信</li>
                        <li>• Apps Scriptで高度な自動化</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">Outlook</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• ルール機能で自動振り分け</li>
                        <li>• クイック操作で定型処理</li>
                        <li>• Power Automateで高度な自動化</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">Zapier連携</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• メール受信→Slack通知</li>
                        <li>• メール受信→スプレッドシート記録</li>
                        <li>• メール受信→AI分析→自動返信</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">Make連携</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 複雑な条件分岐処理</li>
                        <li>• 複数メール一括処理</li>
                        <li>• AI APIとの連携</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">まとめ</h2>
            <div class="bg-violet-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>自動返信、振り分け、下書き作成、フォローアップを自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AIでメール内容を分析・返信案を自動生成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>Gmail/Outlookの標準機能でも基本的な自動化は可能</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>Zapier/Makeで高度な連携・自動化を実現</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-templates.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AI自動化テンプレート
            </a>
            <a href="document-automation.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：ドキュメント自動化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
