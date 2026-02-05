<?php
$page_title = 'AI×学習塾経営 - AIで塾運営を効率化 | AI Tech Stack Dojo';
$current_page = 'home';
include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-header text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×学習塾経営</h1>
            <p class="text-xl opacity-90 mb-6">AIを活用して、集客・教務・業務効率化を実現</p>
            <div class="flex flex-wrap justify-center gap-2 text-sm">
                <span class="bg-white/20 px-3 py-1 rounded-full">ChatGPT</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">Claude</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">SNS集客</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">教材作成</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">保護者対応</span>
            </div>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold text-center mb-8">このコースで学べること</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-indigo-50 rounded-lg">
                    <div class="text-4xl mb-4">📢</div>
                    <h3 class="font-bold mb-2">AI集客術</h3>
                    <p class="text-sm text-gray-600">SNS・Web広告・口コミ対策をAIで効率化</p>
                </div>
                <div class="text-center p-6 bg-indigo-50 rounded-lg">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="font-bold mb-2">教務効率化</h3>
                    <p class="text-sm text-gray-600">カリキュラム設計・教材作成・成績管理</p>
                </div>
                <div class="text-center p-6 bg-indigo-50 rounded-lg">
                    <div class="text-4xl mb-4">👨‍👩‍👧</div>
                    <h3 class="font-bold mb-2">保護者対応</h3>
                    <p class="text-sm text-gray-600">面談準備・報告書作成・連絡業務の効率化</p>
                </div>
            </div>
        </div>
    </section>

    <!-- カリキュラム -->
    <section class="py-12">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold text-center mb-8">カリキュラム</h2>

            <!-- 第1部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-indigo-600">第1部：AI基礎（導入）</h3>
                <div class="space-y-3">
                    <a href="ai-juku-intro.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">1</span>
                            <div>
                                <h4 class="font-bold">AI×学習塾経営とは</h4>
                                <p class="text-sm text-gray-600">AIで塾経営がどう変わるのか</p>
                            </div>
                        </div>
                    </a>
                    <a href="ai-overview.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">2</span>
                            <div>
                                <h4 class="font-bold">AI概要・ツール紹介</h4>
                                <p class="text-sm text-gray-600">ChatGPT・Claudeの基本と使い分け</p>
                            </div>
                        </div>
                    </a>
                    <a href="preparation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">3</span>
                            <div>
                                <h4 class="font-bold">導入準備</h4>
                                <p class="text-sm text-gray-600">アカウント作成と基本設定</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第2部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-indigo-600">第2部：集客・マーケティング</h3>
                <div class="space-y-3">
                    <a href="sns-marketing.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">4</span>
                            <div>
                                <h4 class="font-bold">SNSマーケティング</h4>
                                <p class="text-sm text-gray-600">Instagram・LINE・Xでの効果的な発信</p>
                            </div>
                        </div>
                    </a>
                    <a href="google-business.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">5</span>
                            <div>
                                <h4 class="font-bold">Googleビジネスプロフィール</h4>
                                <p class="text-sm text-gray-600">地域検索で見つけてもらう方法</p>
                            </div>
                        </div>
                    </a>
                    <a href="review-management.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">6</span>
                            <div>
                                <h4 class="font-bold">口コミ・評判管理</h4>
                                <p class="text-sm text-gray-600">口コミ返信と評判向上の施策</p>
                            </div>
                        </div>
                    </a>
                    <a href="web-advertising.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">7</span>
                            <div>
                                <h4 class="font-bold">Web広告・チラシ作成</h4>
                                <p class="text-sm text-gray-600">AIでキャッチコピー・デザインを作成</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第3部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-indigo-600">第3部：教務・授業支援</h3>
                <div class="space-y-3">
                    <a href="curriculum-design.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">8</span>
                            <div>
                                <h4 class="font-bold">カリキュラム設計</h4>
                                <p class="text-sm text-gray-600">AIを活用した学習計画の立て方</p>
                            </div>
                        </div>
                    </a>
                    <a href="teaching-materials.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">9</span>
                            <div>
                                <h4 class="font-bold">教材・問題作成</h4>
                                <p class="text-sm text-gray-600">AIで効率的に教材・テストを作成</p>
                            </div>
                        </div>
                    </a>
                    <a href="learning-analytics.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">10</span>
                            <div>
                                <h4 class="font-bold">学習分析・成績管理</h4>
                                <p class="text-sm text-gray-600">データを活用した個別最適化</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-indigo-600">第4部：業務効率化・保護者対応</h3>
                <div class="space-y-3">
                    <a href="parent-communication.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">11</span>
                            <div>
                                <h4 class="font-bold">保護者対応・面談</h4>
                                <p class="text-sm text-gray-600">面談準備から報告書作成まで</p>
                            </div>
                        </div>
                    </a>
                    <a href="schedule-management.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">12</span>
                            <div>
                                <h4 class="font-bold">時間割・シフト管理</h4>
                                <p class="text-sm text-gray-600">効率的なスケジュール作成</p>
                            </div>
                        </div>
                    </a>
                    <a href="staff-training.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">13</span>
                            <div>
                                <h4 class="font-bold">講師教育・研修</h4>
                                <p class="text-sm text-gray-600">マニュアル作成と研修効率化</p>
                            </div>
                        </div>
                    </a>
                    <a href="glossary.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-indigo-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">14</span>
                            <div>
                                <h4 class="font-bold">用語集</h4>
                                <p class="text-sm text-gray-600">AI×学習塾経営で使われる用語解説</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 対象者 -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4">このコースの対象者</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-indigo-500 mr-2">✓</span>
                        学習塾・予備校を経営している方
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-500 mr-2">✓</span>
                        個別指導塾の教室長・マネージャーの方
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-500 mr-2">✓</span>
                        これから塾を開業したい方
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-500 mr-2">✓</span>
                        家庭教師・オンライン講師の方
                    </li>
                </ul>
            </div>

            <div class="text-center mt-12">
                <a href="ai-juku-intro.php" class="inline-block bg-indigo-600 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-indigo-700 transition">
                    学習を始める
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
