<?php
$page_title = 'AI×人材育成・教育 | AI Tech Stack';
$current_page = 'home';
include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×人材育成・教育</h1>
            <p class="text-xl mb-6 opacity-90">AIを活用して、効果的な人材育成・研修を実現する</p>
            <p class="text-lg opacity-75 mb-8">研修設計・教材作成・効果測定まで、AIで人材育成を効率化</p>
            <a href="training-basics.php" class="inline-block bg-white text-sky-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">
                学習を始める →
            </a>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">このコースで学べること</h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="font-bold text-lg mb-2">人材育成の基礎</h3>
                    <p class="text-sm text-gray-600">学習設計、成人学習理論、研修手法の基本を習得</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold text-lg mb-2">AI活用研修設計</h3>
                    <p class="text-sm text-gray-600">AIで教材作成、テスト生成、カリキュラム設計を効率化</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="font-bold text-lg mb-2">効果測定</h3>
                    <p class="text-sm text-gray-600">研修効果の測定・分析・改善サイクルを回す</p>
                </div>
            </div>
        </div>
    </section>

    <!-- カリキュラム -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">カリキュラム</h2>
            <div class="max-w-4xl mx-auto space-y-8">

                <!-- 第1部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-sky-600">第1部：人材育成の基礎知識</h3>
                    <div class="space-y-3">
                        <a href="training-basics.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">1</span>
                                <div>
                                    <h4 class="font-bold">人材育成の基礎</h4>
                                    <p class="text-sm text-gray-600">人材育成の目的と重要性</p>
                                </div>
                            </div>
                        </a>
                        <a href="learning-design.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">2</span>
                                <div>
                                    <h4 class="font-bold">学習設計（ID）</h4>
                                    <p class="text-sm text-gray-600">インストラクショナルデザインの基本</p>
                                </div>
                            </div>
                        </a>
                        <a href="adult-learning.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">3</span>
                                <div>
                                    <h4 class="font-bold">成人学習理論</h4>
                                    <p class="text-sm text-gray-600">大人の学び方の特徴と効果的な教え方</p>
                                </div>
                            </div>
                        </a>
                        <a href="training-methods.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">4</span>
                                <div>
                                    <h4 class="font-bold">研修手法・形式</h4>
                                    <p class="text-sm text-gray-600">集合研修、OJT、eラーニング等の特徴</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第2部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-sky-600">第2部：AI×研修設計</h3>
                    <div class="space-y-3">
                        <a href="ai-training-tools.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">5</span>
                                <div>
                                    <h4 class="font-bold">AI研修ツール</h4>
                                    <p class="text-sm text-gray-600">人材育成に使えるAIツールの紹介</p>
                                </div>
                            </div>
                        </a>
                        <a href="ai-content-creation.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">6</span>
                                <div>
                                    <h4 class="font-bold">AI教材作成</h4>
                                    <p class="text-sm text-gray-600">AIで研修資料・マニュアルを効率的に作成</p>
                                </div>
                            </div>
                        </a>
                        <a href="ai-assessment.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">7</span>
                                <div>
                                    <h4 class="font-bold">AI評価・テスト作成</h4>
                                    <p class="text-sm text-gray-600">理解度テスト・アセスメントをAIで作成</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第3部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-sky-600">第3部：実践研修運営</h3>
                    <div class="space-y-3">
                        <a href="onboarding.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">8</span>
                                <div>
                                    <h4 class="font-bold">オンボーディング研修</h4>
                                    <p class="text-sm text-gray-600">新入社員・中途社員の受け入れ研修</p>
                                </div>
                            </div>
                        </a>
                        <a href="skill-training.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">9</span>
                                <div>
                                    <h4 class="font-bold">スキル研修</h4>
                                    <p class="text-sm text-gray-600">業務スキル・専門スキルの研修設計</p>
                                </div>
                            </div>
                        </a>
                        <a href="leadership-training.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">10</span>
                                <div>
                                    <h4 class="font-bold">リーダーシップ研修</h4>
                                    <p class="text-sm text-gray-600">管理職・リーダー育成プログラム</p>
                                </div>
                            </div>
                        </a>
                        <a href="elearning.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">11</span>
                                <div>
                                    <h4 class="font-bold">eラーニング・オンライン研修</h4>
                                    <p class="text-sm text-gray-600">オンライン研修の設計と運営</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第4部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-sky-600">第4部：応用とサポート</h3>
                    <div class="space-y-3">
                        <a href="training-evaluation.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">12</span>
                                <div>
                                    <h4 class="font-bold">研修効果測定</h4>
                                    <p class="text-sm text-gray-600">カークパトリックモデルと効果測定</p>
                                </div>
                            </div>
                        </a>
                        <a href="next-steps.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">13</span>
                                <div>
                                    <h4 class="font-bold">次のステップ</h4>
                                    <p class="text-sm text-gray-600">さらなるスキルアップのために</p>
                                </div>
                            </div>
                        </a>
                        <a href="glossary.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-sky-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">14</span>
                                <div>
                                    <h4 class="font-bold">用語集</h4>
                                    <p class="text-sm text-gray-600">人材育成用語の解説</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">AIで人材育成を変革しよう</h2>
            <p class="text-xl mb-8 opacity-90">効果的な研修設計と運営で、組織の成長を加速させる</p>
            <a href="training-basics.php" class="inline-block bg-white text-sky-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">
                今すぐ始める →
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
