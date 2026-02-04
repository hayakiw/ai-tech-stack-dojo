<?php
$page_title = 'AI評価・テスト作成 - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×研修設計';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI評価・テスト作成</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">理解度チェックテストやアセスメントをAIで効率的に作成。学習効果を可視化し、改善につなげましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">理解度テストの作成</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">選択式問題</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">「コンプライアンス研修」の理解度テストを作成してください。

【問題数】10問（4択）
【難易度】基礎レベル
【範囲】
・コンプライアンスの定義
・ハラスメントの種類
・情報セキュリティの基本
・通報制度

各問題に：
- 問題文
- 選択肢4つ
- 正解
- 解説（なぜその答えか）
を含めてください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">記述式問題</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">リーダーシップ研修の振り返り用に、記述式問題を5問作成してください。

【対象】新任管理職
【目的】研修内容の定着確認と実践への橋渡し

各問題に：
- 問題文（150字以内で回答を求める）
- 評価ポイント（採点者向け）
- 模範解答例
を含めてください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">スキルアセスメントの作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">営業スキルのセルフアセスメントシートを作成してください。

【評価項目】
1. 顧客理解力
2. 提案力
3. クロージング力
4. 関係構築力
5. 数値管理力

各項目について：
- 5段階の評価基準（各レベルの具体的な行動を記述）
- 自己評価欄
- 上司評価欄
- 今後の課題を書く欄

を設計してください。</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">研修アンケートの作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">研修後アンケートを作成してください。

【目的】
・研修の満足度測定
・学習内容の理解度確認
・今後の改善点収集

【条件】
・回答時間5分以内
・選択式中心（一部自由記述）

以下の観点を含めてください：
1. 研修全体の満足度
2. 講師の評価
3. 教材の評価
4. 理解度の自己評価
5. 実務への活用意向
6. 改善要望（自由記述）</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">評価設計のポイント</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">ブルームの分類法</h3>
                    <p class="text-gray-600 mb-4">学習目標の深さに応じたテスト設計。</p>
                    <div class="grid md:grid-cols-3 gap-3 text-sm">
                        <div class="bg-sky-50 p-3 rounded">
                            <h4 class="font-bold">知識・理解</h4>
                            <p class="text-gray-600">〇〇とは何か？選択式で確認</p>
                        </div>
                        <div class="bg-sky-50 p-3 rounded">
                            <h4 class="font-bold">応用・分析</h4>
                            <p class="text-gray-600">事例問題、ケーススタディ</p>
                        </div>
                        <div class="bg-sky-50 p-3 rounded">
                            <h4 class="font-bold">評価・創造</h4>
                            <p class="text-gray-600">記述式、実技、発表</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">評価のタイミング</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center">
                            <span class="bg-sky-500 text-white px-2 py-1 rounded mr-3 text-xs">事前</span>
                            <span>現状のスキルレベルを把握（プリテスト）</span>
                        </div>
                        <div class="flex items-center">
                            <span class="bg-sky-500 text-white px-2 py-1 rounded mr-3 text-xs">研修中</span>
                            <span>理解度確認クイズ、ワーク評価</span>
                        </div>
                        <div class="flex items-center">
                            <span class="bg-sky-500 text-white px-2 py-1 rounded mr-3 text-xs">直後</span>
                            <span>理解度テスト、満足度アンケート</span>
                        </div>
                        <div class="flex items-center">
                            <span class="bg-sky-500 text-white px-2 py-1 rounded mr-3 text-xs">数ヶ月後</span>
                            <span>行動変容、業績への影響</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">まとめ</h2>
            <div class="bg-sky-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>選択式・記述式テストをAIで効率作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>スキルアセスメント、アンケートも作成可能</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>学習目標の深さに応じた評価方法を選ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>評価結果を次の研修改善に活かす</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-content-creation.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AI教材作成
            </a>
            <a href="onboarding.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：オンボーディング研修
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
