<?php
$page_title = 'AIで業務を自動化 - AI×業務自動化 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：AI×自動化ツール';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIで業務を自動化</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">ChatGPTやClaudeなどの生成AIを活用すれば、これまで人の判断が必要だった業務も自動化できます。AIの力で業務効率を劇的に向上させましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIで自動化できる業務</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📝 文章生成</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• メール文面の作成</li>
                        <li>• 報告書・議事録の作成</li>
                        <li>• SNS投稿文の作成</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📊 データ処理</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• データの分類・整理</li>
                        <li>• 情報の要約・抽出</li>
                        <li>• データ分析・レポート作成</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">🔍 情報収集</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• リサーチ・調査</li>
                        <li>• 競合分析</li>
                        <li>• 市場動向の把握</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">💬 コミュニケーション</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 問い合わせ対応</li>
                        <li>• FAQ作成</li>
                        <li>• 翻訳</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AI自動化の実践例</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">例1: 顧客メールの自動返信案作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の顧客からの問い合わせメールに対する返信案を作成してください。

【問い合わせ内容】
{顧客のメール本文}

【返信のポイント】
・丁寧で親しみやすいトーン
・24時間以内に対応する旨を伝える
・不明点があれば再度連絡いただくよう案内

返信メールの件名と本文を作成してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">例2: 会議議事録の自動作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の会議メモから議事録を作成してください。

【会議情報】
日時：2024年1月15日 14:00-15:00
参加者：田中、鈴木、佐藤

【メモ】
{会議中のメモ・発言内容}

【議事録に含める項目】
1. 決定事項
2. 討議内容
3. 次回アクション（担当者・期限付き）
4. 次回会議予定</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">例3: データ分類の自動化</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の顧客フィードバックを分類してください。

【分類カテゴリ】
- 製品の品質
- 価格
- カスタマーサポート
- 配送
- その他

【フィードバック一覧】
1. 「商品の質が良く満足しています」
2. 「もう少し安いと嬉しいです」
3. 「問い合わせへの返信が遅かった」
...

各フィードバックにカテゴリとポジティブ/ネガティブの評価をつけてください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AI自動化のコツ</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">1. 明確な指示を与える</h4>
                    <p class="text-sm text-gray-600">曖昧な指示ではAIは期待通りの結果を出せません。具体的に何をしてほしいか明記しましょう。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">2. テンプレート化する</h4>
                    <p class="text-sm text-gray-600">毎回同じような作業は、プロンプトをテンプレート化して再利用。変わる部分だけ入れ替えれば効率的。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">3. 人がチェックする</h4>
                    <p class="text-sm text-gray-600">AIの出力は完璧ではありません。重要な業務は必ず人が確認してから使用しましょう。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">4. 例を示す</h4>
                    <p class="text-sm text-gray-600">望む出力形式の例を示すと、AIはより正確に理解して作業してくれます。</p>
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
                        <span>AIで文章生成、データ処理、情報収集を自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>プロンプトをテンプレート化して効率アップ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>明確な指示と例を示すことで精度向上</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>重要な出力は必ず人がチェック</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="automation-planning.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：自動化計画の立て方
            </a>
            <a href="ai-workflow.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：AIワークフロー設計
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
