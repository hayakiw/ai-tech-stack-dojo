<?php
$page_title = 'AI×業務自動化 | AI Tech Stack';
$current_page = 'home';
include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×業務自動化</h1>
            <p class="text-xl opacity-90 mb-6">AIを活用して、面倒な作業を自動化しよう</p>
            <p class="text-lg opacity-75">全14レッスンで基礎から実践まで学べます</p>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold text-center mb-8">このコースで学べること</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-violet-50 rounded-lg">
                    <div class="text-4xl mb-4">🔄</div>
                    <h3 class="font-bold mb-2">業務自動化の基礎</h3>
                    <p class="text-sm text-gray-600">自動化の考え方と計画立案</p>
                </div>
                <div class="text-center p-6 bg-violet-50 rounded-lg">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold mb-2">AI活用テクニック</h3>
                    <p class="text-sm text-gray-600">AIで効率的に自動化を実現</p>
                </div>
                <div class="text-center p-6 bg-violet-50 rounded-lg">
                    <div class="text-4xl mb-4">⚡</div>
                    <h3 class="font-bold mb-2">実践的な自動化</h3>
                    <p class="text-sm text-gray-600">メール・ドキュメント・データ処理</p>
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
                <h3 class="text-lg font-bold mb-4 text-violet-600">第1部：業務自動化の基礎知識</h3>
                <div class="space-y-3">
                    <a href="automation-basics.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">1</span>
                            <div>
                                <h4 class="font-bold">業務自動化とは</h4>
                                <p class="text-sm text-gray-600">自動化のメリットと考え方</p>
                            </div>
                        </div>
                    </a>
                    <a href="automation-types.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">2</span>
                            <div>
                                <h4 class="font-bold">自動化の種類</h4>
                                <p class="text-sm text-gray-600">RPA、API連携、ノーコードツール</p>
                            </div>
                        </div>
                    </a>
                    <a href="automation-tools.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">3</span>
                            <div>
                                <h4 class="font-bold">自動化ツールの紹介</h4>
                                <p class="text-sm text-gray-600">Zapier、Make、Power Automate</p>
                            </div>
                        </div>
                    </a>
                    <a href="automation-planning.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">4</span>
                            <div>
                                <h4 class="font-bold">自動化計画の立て方</h4>
                                <p class="text-sm text-gray-600">業務分析と優先順位付け</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第2部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-violet-600">第2部：AI×自動化ツール</h3>
                <div class="space-y-3">
                    <a href="ai-automation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">5</span>
                            <div>
                                <h4 class="font-bold">AIで業務を自動化</h4>
                                <p class="text-sm text-gray-600">ChatGPT・Claudeの活用法</p>
                            </div>
                        </div>
                    </a>
                    <a href="ai-workflow.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">6</span>
                            <div>
                                <h4 class="font-bold">AIワークフロー設計</h4>
                                <p class="text-sm text-gray-600">効率的な自動化フローの構築</p>
                            </div>
                        </div>
                    </a>
                    <a href="ai-templates.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">7</span>
                            <div>
                                <h4 class="font-bold">AI自動化テンプレート</h4>
                                <p class="text-sm text-gray-600">すぐ使えるプロンプト集</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第3部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-violet-600">第3部：実践テクニック</h3>
                <div class="space-y-3">
                    <a href="email-automation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">8</span>
                            <div>
                                <h4 class="font-bold">メール自動化</h4>
                                <p class="text-sm text-gray-600">返信・振り分け・一括送信</p>
                            </div>
                        </div>
                    </a>
                    <a href="document-automation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">9</span>
                            <div>
                                <h4 class="font-bold">ドキュメント自動化</h4>
                                <p class="text-sm text-gray-600">報告書・議事録・契約書作成</p>
                            </div>
                        </div>
                    </a>
                    <a href="data-automation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">10</span>
                            <div>
                                <h4 class="font-bold">データ処理自動化</h4>
                                <p class="text-sm text-gray-600">データ収集・整形・転記</p>
                            </div>
                        </div>
                    </a>
                    <a href="schedule-automation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">11</span>
                            <div>
                                <h4 class="font-bold">スケジュール・タスク自動化</h4>
                                <p class="text-sm text-gray-600">リマインダー・予定調整・進捗管理</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-violet-600">第4部：応用とサポート</h3>
                <div class="space-y-3">
                    <a href="advanced-automation.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">12</span>
                            <div>
                                <h4 class="font-bold">高度な自動化</h4>
                                <p class="text-sm text-gray-600">複合ワークフロー・条件分岐</p>
                            </div>
                        </div>
                    </a>
                    <a href="next-steps.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">13</span>
                            <div>
                                <h4 class="font-bold">次のステップ</h4>
                                <p class="text-sm text-gray-600">さらなる学習リソース</p>
                            </div>
                        </div>
                    </a>
                    <a href="glossary.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">14</span>
                            <div>
                                <h4 class="font-bold">用語集</h4>
                                <p class="text-sm text-gray-600">業務自動化の専門用語解説</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-12">
                <a href="automation-basics.php" class="inline-block bg-violet-600 text-white px-8 py-4 rounded-lg font-bold hover:bg-violet-700 transition text-lg">
                    学習を始める →
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
