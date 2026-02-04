<?php
$page_title = '成人学習理論 - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：人材育成の基礎知識';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">成人学習理論</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">大人の学び方は子どもとは違います。成人学習の特徴を理解して、効果的な研修を設計しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">アンドラゴジー（成人学習理論）</h2>
            <p class="text-gray-600 mb-6">マルカム・ノールズが提唱した「大人の学び方」の特徴。</p>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">1. 自己決定的</h3>
                    <p class="text-gray-600">大人は自分で学ぶ内容を選びたい。押し付けは嫌がる。</p>
                    <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                        <strong>研修への活かし方：</strong>選択肢を与える、目的を説明する
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">2. 経験を活用</h3>
                    <p class="text-gray-600">これまでの経験が学習のリソース。経験と結びつけて学ぶ。</p>
                    <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                        <strong>研修への活かし方：</strong>事例共有、ディスカッション、経験の振り返り
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">3. 課題解決志向</h3>
                    <p class="text-gray-600">実際の問題を解決するために学びたい。「使える」学びを求める。</p>
                    <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                        <strong>研修への活かし方：</strong>実践的な演習、現場の課題を題材に
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">4. 即時適用</h3>
                    <p class="text-gray-600">学んだことをすぐに使いたい。「いつか役立つ」では動機づけにならない。</p>
                    <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                        <strong>研修への活かし方：</strong>明日から使える内容、アクションプラン作成
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">5. 内発的動機づけ</h3>
                    <p class="text-gray-600">外からの報酬より、自己成長や達成感で動く。</p>
                    <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                        <strong>研修への活かし方：</strong>成長実感、承認、フィードバック
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">経験学習サイクル</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600 mb-4">デービッド・コルブの経験学習モデル。経験を通じて学ぶサイクル。</p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="border-l-4 border-sky-300 pl-4">
                        <h4 class="font-bold">1. 具体的経験</h4>
                        <p class="text-sm text-gray-600">実際に体験する</p>
                    </div>
                    <div class="border-l-4 border-sky-300 pl-4">
                        <h4 class="font-bold">2. 省察的観察</h4>
                        <p class="text-sm text-gray-600">体験を振り返る</p>
                    </div>
                    <div class="border-l-4 border-sky-300 pl-4">
                        <h4 class="font-bold">3. 抽象的概念化</h4>
                        <p class="text-sm text-gray-600">法則やパターンを見出す</p>
                    </div>
                    <div class="border-l-4 border-sky-300 pl-4">
                        <h4 class="font-bold">4. 能動的実験</h4>
                        <p class="text-sm text-gray-600">新しい状況で試す</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">AIで成人学習を意識した研修設計</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">成人学習理論（アンドラゴジー）を踏まえて、
以下の研修プログラムを改善してください。

【現状のプログラム】
・講師が2時間講義
・最後に質疑応答

【受講者】中堅社員（5-10年目）

成人学習の5つの特徴を活かした、
参加型・実践型のプログラムに再設計してください。</pre>
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
                        <span>大人は自己決定的、経験を活かして学ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>課題解決志向で、すぐに使える学びを求める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>経験→振り返り→概念化→実験のサイクル</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>一方的な講義より、参加型・実践型が効果的</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="learning-design.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：学習設計（ID）
            </a>
            <a href="training-methods.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：研修手法・形式
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
