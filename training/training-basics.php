<?php
$page_title = '人材育成の基礎 - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：人材育成の基礎知識';
$step_number = 1;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">人材育成の基礎</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">人材育成は組織の成長エンジン。なぜ人を育てるのか、どう育てるのか、基本的な考え方を押さえましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">人材育成とは</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg text-sky-600 mb-4">人材育成の定義</h3>
                <p class="text-gray-600">従業員の能力・スキル・知識を向上させ、組織の目標達成に貢献できる人材を育てる取り組み。</p>
                <div class="mt-4 grid md:grid-cols-3 gap-4 text-sm">
                    <div class="bg-sky-50 p-3 rounded text-center">
                        <div class="text-2xl mb-2">📈</div>
                        <p>スキル向上</p>
                    </div>
                    <div class="bg-sky-50 p-3 rounded text-center">
                        <div class="text-2xl mb-2">🎯</div>
                        <p>目標達成</p>
                    </div>
                    <div class="bg-sky-50 p-3 rounded text-center">
                        <div class="text-2xl mb-2">🌱</div>
                        <p>成長支援</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg text-sky-600 mb-4">なぜ人材育成が重要か</h3>
                <ul class="space-y-3 text-sm text-gray-600">
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span><strong>生産性向上</strong>：スキルが上がれば成果も上がる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span><strong>離職防止</strong>：成長できる環境は従業員の満足度を高める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span><strong>競争力強化</strong>：人材の質が企業の競争力を決める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span><strong>後継者育成</strong>：将来のリーダーを計画的に育てる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">人材育成の3本柱</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">OJT（On the Job Training）</h3>
                    <p class="text-gray-600 mb-3">実際の仕事を通じて学ぶ。上司や先輩が指導。</p>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                        <strong>特徴：</strong>実践的、即効性がある、個別指導可能
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">Off-JT（Off the Job Training）</h3>
                    <p class="text-gray-600 mb-3">仕事を離れて行う研修。集合研修、セミナー、eラーニング等。</p>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                        <strong>特徴：</strong>体系的に学べる、集中できる、同期との交流
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-sky-600 mb-3">SD（Self Development）</h3>
                    <p class="text-gray-600 mb-3">自己啓発。書籍、資格取得、勉強会参加など自主的な学習。</p>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                        <strong>特徴：</strong>自律的、モチベーション向上、多様な学び
                    </div>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">AIに育成計画を相談</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件で、新入社員向けの年間育成計画を作成してください。

【対象】新卒入社1年目（営業職）
【期間】4月〜翌年3月
【目標】独り立ちして顧客対応ができるレベル

以下を含めてください：
1. 月別の育成テーマ
2. OJTとOff-JTの組み合わせ
3. 各月の到達目標
4. 評価方法</pre>
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
                        <span>人材育成は組織の成長と競争力の源泉</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>OJT、Off-JT、SDの3本柱でバランスよく</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>計画的・継続的な取り組みが重要</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>AIを活用して育成計画を効率化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                トップへ戻る
            </a>
            <a href="learning-design.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：学習設計（ID）
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
