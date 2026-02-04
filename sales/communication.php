<?php
$page_title = 'コミュニケーション術 - AI×営業・セールス | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：営業の基礎知識';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">コミュニケーション術</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">営業の成否はコミュニケーションで決まる。相手の心を開き、信頼を築くための技術を身につけましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">傾聴の技術</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-blue-600">アクティブリスニング</h3>
                <p class="text-gray-600 mb-4">ただ聞くだけでなく、積極的に理解しようとする姿勢。相手に「聴いてもらえている」と感じさせる技術。</p>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded">
                        <h4 class="font-bold mb-2">言語的テクニック</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• 相槌「なるほど」「そうなんですね」</li>
                            <li>• 要約「つまり〜ということですね」</li>
                            <li>• 質問「具体的にはどういうことですか？」</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-4 rounded">
                        <h4 class="font-bold mb-2">非言語テクニック</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• アイコンタクトを取る</li>
                            <li>• うなずきながら聴く</li>
                            <li>• 前のめりの姿勢</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">質問の技術</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">オープン質問</h3>
                    <p class="text-sm text-gray-600 mt-1">「はい/いいえ」で終わらない質問。情報を引き出す。</p>
                    <p class="text-sm mt-2 bg-gray-100 p-2 rounded">例：「どのような課題をお持ちですか？」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">クローズド質問</h3>
                    <p class="text-sm text-gray-600 mt-1">「はい/いいえ」で答える質問。確認や決断を促す。</p>
                    <p class="text-sm mt-2 bg-gray-100 p-2 rounded">例：「来週の月曜日でよろしいですか？」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">仮説質問</h3>
                    <p class="text-sm text-gray-600 mt-1">仮説を提示して反応を見る。ニーズを深掘り。</p>
                    <p class="text-sm mt-2 bg-gray-100 p-2 rounded">例：「もしかして〜でお困りではないですか？」</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">拡大質問</h3>
                    <p class="text-sm text-gray-600 mt-1">話を広げる質問。潜在ニーズを発見。</p>
                    <p class="text-sm mt-2 bg-gray-100 p-2 rounded">例：「他にも気になっていることはありますか？」</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">信頼を築く伝え方</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-blue-600">PREP法</h3>
                <p class="text-gray-600 mb-4">論理的でわかりやすい説明の型</p>

                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">P</span>
                        <div>
                            <span class="font-bold">Point（結論）</span>
                            <span class="text-gray-600 text-sm ml-2">まず結論を述べる</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">R</span>
                        <div>
                            <span class="font-bold">Reason（理由）</span>
                            <span class="text-gray-600 text-sm ml-2">なぜそう言えるか</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">E</span>
                        <div>
                            <span class="font-bold">Example（具体例）</span>
                            <span class="text-gray-600 text-sm ml-2">実例で説明</span>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">P</span>
                        <div>
                            <span class="font-bold">Point（結論）</span>
                            <span class="text-gray-600 text-sm ml-2">再度結論で締める</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>ポイント：</strong>相手の言葉を使う。専門用語を避け、顧客が使った表現で話すと共感を得やすい。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">まとめ</h2>
            <div class="bg-blue-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>アクティブリスニングで「聴く姿勢」を示す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>オープン質問で情報を引き出し、クローズドで確認</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>PREP法で論理的にわかりやすく伝える</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>相手の言葉を使って共感を生む</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="sales-process.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：営業プロセス
            </a>
            <a href="ai-tools.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：AI営業ツール入門
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
