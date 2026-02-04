<?php
$page_title = '反論対応 - AI×営業・セールス | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">反論対応</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">「高い」「検討します」「他社と比較中」。反論は購入意欲の表れ。適切に対応すれば、成約につなげるチャンスです。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">反論対応の基本フレームワーク</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-blue-600">LAER法</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-3">L</span>
                        <div>
                            <h4 class="font-bold">Listen（傾聴）</h4>
                            <p class="text-sm text-gray-600">まず最後まで聴く。遮らない、否定しない</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-3">A</span>
                        <div>
                            <h4 class="font-bold">Acknowledge（共感）</h4>
                            <p class="text-sm text-gray-600">「おっしゃる通りです」「ごもっともです」と受け止める</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-3">E</span>
                        <div>
                            <h4 class="font-bold">Explore（探求）</h4>
                            <p class="text-sm text-gray-600">「具体的にはどのような点が？」と深掘りする</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-3">R</span>
                        <div>
                            <h4 class="font-bold">Respond（対応）</h4>
                            <p class="text-sm text-gray-600">本当の懸念に対して、具体的な解決策を提示</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">よくある反論と対応例</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">「高いですね」</h3>
                    <div class="bg-gray-50 p-4 rounded mt-2">
                        <p class="text-sm text-gray-600 mb-2"><strong>悪い対応：</strong>「では値引きします」→ 価値を下げる</p>
                        <p class="text-sm text-blue-600"><strong>良い対応：</strong>「何と比較されてのお話ですか？」→ ROIで価値を説明</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">「検討します」</h3>
                    <div class="bg-gray-50 p-4 rounded mt-2">
                        <p class="text-sm text-gray-600 mb-2"><strong>悪い対応：</strong>「わかりました。ご連絡お待ちしています」→ 受け身</p>
                        <p class="text-sm text-blue-600"><strong>良い対応：</strong>「ありがとうございます。どのような点を重視してご検討されますか？」→ 懸念を明確化</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">「他社と比較中です」</h3>
                    <div class="bg-gray-50 p-4 rounded mt-2">
                        <p class="text-sm text-gray-600 mb-2"><strong>悪い対応：</strong>「うちが一番です」→ 根拠なき主張</p>
                        <p class="text-sm text-blue-600"><strong>良い対応：</strong>「比較の際、特に重視されている点はどこですか？」→ 差別化ポイントを提示</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-red-600 mb-2">「今は必要ない」</h3>
                    <div class="bg-gray-50 p-4 rounded mt-2">
                        <p class="text-sm text-gray-600 mb-2"><strong>悪い対応：</strong>「そうですか...」→ 諦める</p>
                        <p class="text-sm text-blue-600"><strong>良い対応：</strong>「いつ頃なら検討可能でしょうか？その際に役立つ情報をお送りしてもよいですか？」→ 関係を維持</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AIで反論対応を準備</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-blue-600">想定反論と回答を準備</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">BtoB営業で、以下の製品を提案する際に想定される反論と、
その対応方法を教えてください。

【製品】生産管理システム
【価格】初期費用500万円、月額30万円
【ターゲット】製造業の中堅企業

【想定される反論】
1. 価格が高い
2. 既存システムで十分
3. 導入工数がかかりそう
4. 社内の反対がある
5. 今期は予算がない

各反論に対して、LAER法を使った具体的な回答例を作成してください。</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">まとめ</h2>
            <div class="bg-blue-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>反論は購入意欲の表れ。歓迎する姿勢で</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>LAER法：傾聴→共感→探求→対応の順で</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>本当の懸念を深掘りしてから対応する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AIで想定反論への回答を事前に準備</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="online-sales.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：オンライン商談
            </a>
            <a href="closing.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：クロージング
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
