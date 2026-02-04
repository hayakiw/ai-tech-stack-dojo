<?php
$page_title = '学習設計（ID） - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：人材育成の基礎知識';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">学習設計（インストラクショナルデザイン）</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">インストラクショナルデザイン（ID）は、効果的な学習体験を設計する手法。「何を」「どう」教えるかを科学的にデザインします。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">ADDIEモデル</h2>
            <p class="text-gray-600 mb-6">IDの代表的なフレームワーク。5つのフェーズで研修を設計・実施・改善します。</p>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">A</div>
                        <div>
                            <h3 class="font-bold text-lg">Analysis（分析）</h3>
                            <p class="text-gray-600 mt-2">学習者のニーズ、現状スキル、目標との差を分析。何を学ぶ必要があるか明確に。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">D</div>
                        <div>
                            <h3 class="font-bold text-lg">Design（設計）</h3>
                            <p class="text-gray-600 mt-2">学習目標、カリキュラム、評価方法を設計。どう教えるかの青写真を描く。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">D</div>
                        <div>
                            <h3 class="font-bold text-lg">Development（開発）</h3>
                            <p class="text-gray-600 mt-2">教材、コンテンツ、演習を作成。設計に基づいて具体的なものを作る。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">I</div>
                        <div>
                            <h3 class="font-bold text-lg">Implementation（実施）</h3>
                            <p class="text-gray-600 mt-2">研修を実施。講師のトレーニング、学習環境の整備も含む。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">E</div>
                        <div>
                            <h3 class="font-bold text-lg">Evaluation（評価）</h3>
                            <p class="text-gray-600 mt-2">効果を測定し、改善点を特定。次のサイクルに活かす。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">学習目標の設定</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-4">SMART目標</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex items-start">
                        <span class="font-bold text-sky-600 w-24">Specific</span>
                        <span class="text-gray-600">具体的に何ができるようになるか</span>
                    </div>
                    <div class="flex items-start">
                        <span class="font-bold text-sky-600 w-24">Measurable</span>
                        <span class="text-gray-600">測定可能な指標で評価できる</span>
                    </div>
                    <div class="flex items-start">
                        <span class="font-bold text-sky-600 w-24">Achievable</span>
                        <span class="text-gray-600">達成可能な現実的な目標</span>
                    </div>
                    <div class="flex items-start">
                        <span class="font-bold text-sky-600 w-24">Relevant</span>
                        <span class="text-gray-600">業務に関連した意味のある目標</span>
                    </div>
                    <div class="flex items-start">
                        <span class="font-bold text-sky-600 w-24">Time-bound</span>
                        <span class="text-gray-600">期限が明確</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">AIで学習設計を支援</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">ADDIEモデルに基づいて、以下の研修の設計を手伝ってください。

【研修テーマ】プレゼンテーションスキル向上
【対象者】入社3年目の営業担当者10名
【現状】提案書は作れるが、プレゼンで緊張して伝わらない
【期間】半日（4時間）

各フェーズで検討すべきことを教えてください。</pre>
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
                        <span>ADDIEモデル：分析→設計→開発→実施→評価</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>学習目標はSMARTに設定する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>評価・改善のサイクルを回す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>AIで各フェーズの設計を効率化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="training-basics.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：人材育成の基礎
            </a>
            <a href="adult-learning.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：成人学習理論
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
