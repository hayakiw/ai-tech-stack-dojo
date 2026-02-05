<?php
$page_title = 'AI×歯科医院経営 - AIで医院運営を効率化 | AI Tech Stack Dojo';
$current_page = 'home';
include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-header text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×歯科医院経営</h1>
            <p class="text-xl opacity-90 mb-6">AIを活用して、集客・患者対応・業務効率化を実現</p>
            <div class="flex flex-wrap justify-center gap-2 text-sm">
                <span class="bg-white/20 px-3 py-1 rounded-full">ChatGPT</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">Claude</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">集客対策</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">患者対応</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">業務効率化</span>
            </div>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold text-center mb-8">このコースで学べること</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-cyan-50 rounded-lg">
                    <div class="text-4xl mb-4">📢</div>
                    <h3 class="font-bold mb-2">AI集客術</h3>
                    <p class="text-sm text-gray-600">SNS・Web広告・口コミ対策をAIで効率化</p>
                </div>
                <div class="text-center p-6 bg-cyan-50 rounded-lg">
                    <div class="text-4xl mb-4">🦷</div>
                    <h3 class="font-bold mb-2">患者対応</h3>
                    <p class="text-sm text-gray-600">治療説明・同意書・リコール管理</p>
                </div>
                <div class="text-center p-6 bg-cyan-50 rounded-lg">
                    <div class="text-4xl mb-4">📋</div>
                    <h3 class="font-bold mb-2">業務効率化</h3>
                    <p class="text-sm text-gray-600">予約管理・スタッフ教育・書類作成</p>
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
                <h3 class="text-lg font-bold mb-4 text-cyan-600">第1部：AI基礎（導入）</h3>
                <div class="space-y-3">
                    <a href="ai-dental-intro.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">1</span>
                            <div>
                                <h4 class="font-bold">AI×歯科医院経営とは</h4>
                                <p class="text-sm text-gray-600">AIで歯科医院経営がどう変わるのか</p>
                            </div>
                        </div>
                    </a>
                    <a href="ai-overview.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">2</span>
                            <div>
                                <h4 class="font-bold">AI概要・ツール紹介</h4>
                                <p class="text-sm text-gray-600">ChatGPT・Claudeの基本と使い分け</p>
                            </div>
                        </div>
                    </a>
                    <a href="preparation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">3</span>
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
                <h3 class="text-lg font-bold mb-4 text-cyan-600">第2部：集客・マーケティング</h3>
                <div class="space-y-3">
                    <a href="sns-marketing.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">4</span>
                            <div>
                                <h4 class="font-bold">SNSマーケティング</h4>
                                <p class="text-sm text-gray-600">Instagram・LINE・Xでの効果的な発信</p>
                            </div>
                        </div>
                    </a>
                    <a href="google-business.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">5</span>
                            <div>
                                <h4 class="font-bold">Googleビジネスプロフィール</h4>
                                <p class="text-sm text-gray-600">地域検索で見つけてもらう方法</p>
                            </div>
                        </div>
                    </a>
                    <a href="review-management.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">6</span>
                            <div>
                                <h4 class="font-bold">口コミ・評判管理</h4>
                                <p class="text-sm text-gray-600">口コミ返信と評判向上の施策</p>
                            </div>
                        </div>
                    </a>
                    <a href="web-advertising.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">7</span>
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
                <h3 class="text-lg font-bold mb-4 text-cyan-600">第3部：患者対応・診療支援</h3>
                <div class="space-y-3">
                    <a href="patient-communication.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">8</span>
                            <div>
                                <h4 class="font-bold">患者コミュニケーション</h4>
                                <p class="text-sm text-gray-600">分かりやすい説明と信頼関係構築</p>
                            </div>
                        </div>
                    </a>
                    <a href="treatment-explanation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">9</span>
                            <div>
                                <h4 class="font-bold">治療説明・同意書作成</h4>
                                <p class="text-sm text-gray-600">AIで分かりやすい説明資料を作成</p>
                            </div>
                        </div>
                    </a>
                    <a href="recall-management.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">10</span>
                            <div>
                                <h4 class="font-bold">リコール・予防管理</h4>
                                <p class="text-sm text-gray-600">定期検診の案内と予防歯科の推進</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-cyan-600">第4部：業務効率化</h3>
                <div class="space-y-3">
                    <a href="appointment-management.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">11</span>
                            <div>
                                <h4 class="font-bold">予約管理・受付効率化</h4>
                                <p class="text-sm text-gray-600">効率的なスケジュール管理</p>
                            </div>
                        </div>
                    </a>
                    <a href="staff-training.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">12</span>
                            <div>
                                <h4 class="font-bold">スタッフ教育・マニュアル</h4>
                                <p class="text-sm text-gray-600">研修資料とマニュアル作成</p>
                            </div>
                        </div>
                    </a>
                    <a href="insurance-documents.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">13</span>
                            <div>
                                <h4 class="font-bold">保険請求・書類作成</h4>
                                <p class="text-sm text-gray-600">事務作業の効率化</p>
                            </div>
                        </div>
                    </a>
                    <a href="glossary.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-cyan-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">14</span>
                            <div>
                                <h4 class="font-bold">用語集</h4>
                                <p class="text-sm text-gray-600">AI×歯科医院経営で使われる用語解説</p>
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
            <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 rounded-lg">
                <h3 class="font-bold text-lg mb-4">このコースの対象者</h3>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-cyan-500 mr-2">✓</span>
                        歯科医院を開業している院長・経営者の方
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-500 mr-2">✓</span>
                        歯科医院のマネージャー・事務長の方
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-500 mr-2">✓</span>
                        これから開業を考えている歯科医師の方
                    </li>
                    <li class="flex items-start">
                        <span class="text-cyan-500 mr-2">✓</span>
                        歯科衛生士・歯科助手の方
                    </li>
                </ul>
            </div>

            <div class="text-center mt-12">
                <a href="ai-dental-intro.php" class="inline-block bg-cyan-600 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-cyan-700 transition">
                    学習を始める
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
