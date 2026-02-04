<?php
$page_title = 'LP制作 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践サイト制作';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">LP（ランディングページ）制作</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">LPは「1つの目的」に特化したページ。購入、登録、お問い合わせなど、訪問者に行動を起こしてもらうことがゴールです。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">LPの基本構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h4 class="font-bold">ファーストビュー</h4>
                            <p class="text-sm text-gray-600">キャッチコピー、サブコピー、CTA</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h4 class="font-bold">問題提起</h4>
                            <p class="text-sm text-gray-600">「こんなお悩みありませんか？」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h4 class="font-bold">解決策の提示</h4>
                            <p class="text-sm text-gray-600">商品・サービスの紹介</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h4 class="font-bold">特徴・メリット</h4>
                            <p class="text-sm text-gray-600">選ばれる理由、他との違い</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">5</div>
                        <div>
                            <h4 class="font-bold">お客様の声・実績</h4>
                            <p class="text-sm text-gray-600">社会的証明で信頼性アップ</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">6</div>
                        <div>
                            <h4 class="font-bold">よくある質問</h4>
                            <p class="text-sm text-gray-600">不安を解消</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-orange-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">7</div>
                        <div>
                            <h4 class="font-bold">CTA（行動喚起）</h4>
                            <p class="text-sm text-gray-600">申し込みボタン、フォーム</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでLPを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">ファーストビュー</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">オンライン英会話サービスのLPのファーストビューを作成してください。

【サービス】
・月額9,800円のオンライン英会話
・24時間予約可能
・ネイティブ講師

【ターゲット】
・30代ビジネスパーソン
・英語を仕事で使いたい

【含める要素】
・インパクトのあるキャッチコピー
・サブコピー（ベネフィット）
・「無料体験を始める」ボタン
・信頼性を示す数値（◯万人が受講など）

Tailwind CSSで、ヒーローイメージ付きでお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">問題提起セクション</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">「こんなお悩みありませんか？」セクションを作成してください。

【悩みの例】
・英語の会議で発言できない
・海外出張が不安
・昇進に英語力が必要
・過去に挫折した経験がある

共感を呼ぶデザインで、チェックマーク付きのリストにしてください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">LPのコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">1ページ1目的</h4>
                    <p class="text-sm text-gray-600">複数の目的を混ぜない。リンクも最小限に</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">CTAは複数回</h4>
                    <p class="text-sm text-gray-600">スクロールに応じてCTAを配置</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">社会的証明</h4>
                    <p class="text-sm text-gray-600">お客様の声、導入実績、メディア掲載</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">緊急性・限定性</h4>
                    <p class="text-sm text-gray-600">「今だけ」「限定◯名」で行動を促す</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>LPは1つの目的に特化したページ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>問題提起→解決策→証拠→CTAの流れ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AIにセクションごとにコードを生成してもらう</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>CTAは複数配置、社会的証明で信頼性アップ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="practice-business.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ビジネスサイト制作
            </a>
            <a href="practice-blog.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：ブログサイト制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
