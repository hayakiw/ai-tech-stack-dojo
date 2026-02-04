<?php
$page_title = 'AI×副業・フリーランス | AI Tech Stack';
$current_page = 'home';
include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×副業・フリーランス</h1>
            <p class="text-xl opacity-90 mb-6">AIを活用して、副業・フリーランスで収入を得よう</p>
            <p class="text-lg opacity-75">全14レッスンで基礎から実践まで学べます</p>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-2xl font-bold text-center mb-8">このコースで学べること</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-rose-50 rounded-lg">
                    <div class="text-4xl mb-4">💼</div>
                    <h3 class="font-bold mb-2">副業の始め方</h3>
                    <p class="text-sm text-gray-600">種類・選び方・法律・税金の基礎</p>
                </div>
                <div class="text-center p-6 bg-rose-50 rounded-lg">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold mb-2">AI活用スキル</h3>
                    <p class="text-sm text-gray-600">AIで効率化・ポートフォリオ作成</p>
                </div>
                <div class="text-center p-6 bg-rose-50 rounded-lg">
                    <div class="text-4xl mb-4">💰</div>
                    <h3 class="font-bold mb-2">案件獲得・収入UP</h3>
                    <p class="text-sm text-gray-600">営業・価格設定・スケール方法</p>
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
                <h3 class="text-lg font-bold mb-4 text-rose-600">第1部：副業・フリーランスの基礎知識</h3>
                <div class="space-y-3">
                    <a href="sidejob-basics.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">1</span>
                            <div>
                                <h4 class="font-bold">副業・フリーランスとは</h4>
                                <p class="text-sm text-gray-600">メリット・デメリットと心構え</p>
                            </div>
                        </div>
                    </a>
                    <a href="sidejob-types.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">2</span>
                            <div>
                                <h4 class="font-bold">副業の種類と選び方</h4>
                                <p class="text-sm text-gray-600">スキル別・時間別のおすすめ</p>
                            </div>
                        </div>
                    </a>
                    <a href="legal-tax.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">3</span>
                            <div>
                                <h4 class="font-bold">法律・税金の基礎</h4>
                                <p class="text-sm text-gray-600">確定申告・開業届・会社の規定</p>
                            </div>
                        </div>
                    </a>
                    <a href="time-management.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">4</span>
                            <div>
                                <h4 class="font-bold">時間管理・両立のコツ</h4>
                                <p class="text-sm text-gray-600">本業との両立・効率的な働き方</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第2部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-rose-600">第2部：AI×副業スキル</h3>
                <div class="space-y-3">
                    <a href="ai-skills.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">5</span>
                            <div>
                                <h4 class="font-bold">AIで身につけるスキル</h4>
                                <p class="text-sm text-gray-600">ライティング・デザイン・プログラミング</p>
                            </div>
                        </div>
                    </a>
                    <a href="ai-work-efficiency.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">6</span>
                            <div>
                                <h4 class="font-bold">AI活用で作業効率化</h4>
                                <p class="text-sm text-gray-600">時短テクニック・自動化</p>
                            </div>
                        </div>
                    </a>
                    <a href="ai-portfolio.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">7</span>
                            <div>
                                <h4 class="font-bold">AIでポートフォリオ作成</h4>
                                <p class="text-sm text-gray-600">実績の見せ方・自己PR</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第3部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-rose-600">第3部：実践テクニック</h3>
                <div class="space-y-3">
                    <a href="client-acquisition.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">8</span>
                            <div>
                                <h4 class="font-bold">案件獲得の方法</h4>
                                <p class="text-sm text-gray-600">クラウドソーシング・営業・紹介</p>
                            </div>
                        </div>
                    </a>
                    <a href="pricing.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">9</span>
                            <div>
                                <h4 class="font-bold">価格設定・見積もり</h4>
                                <p class="text-sm text-gray-600">適正価格の決め方・交渉術</p>
                            </div>
                        </div>
                    </a>
                    <a href="client-communication.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">10</span>
                            <div>
                                <h4 class="font-bold">クライアントコミュニケーション</h4>
                                <p class="text-sm text-gray-600">信頼構築・トラブル対応</p>
                            </div>
                        </div>
                    </a>
                    <a href="contract-invoice.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">11</span>
                            <div>
                                <h4 class="font-bold">契約・請求書の作成</h4>
                                <p class="text-sm text-gray-600">契約書・見積書・請求書のテンプレート</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div class="mb-8">
                <h3 class="text-lg font-bold mb-4 text-rose-600">第4部：応用とサポート</h3>
                <div class="space-y-3">
                    <a href="scaling.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">12</span>
                            <div>
                                <h4 class="font-bold">収入アップ・スケール</h4>
                                <p class="text-sm text-gray-600">単価UP・継続案件・事業拡大</p>
                            </div>
                        </div>
                    </a>
                    <a href="next-steps.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">13</span>
                            <div>
                                <h4 class="font-bold">次のステップ</h4>
                                <p class="text-sm text-gray-600">さらなる学習リソース</p>
                            </div>
                        </div>
                    </a>
                    <a href="glossary.php" class="block bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                        <div class="flex items-center">
                            <span class="bg-rose-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">14</span>
                            <div>
                                <h4 class="font-bold">用語集</h4>
                                <p class="text-sm text-gray-600">副業・フリーランスの専門用語解説</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-12">
                <a href="sidejob-basics.php" class="inline-block bg-rose-600 text-white px-8 py-4 rounded-lg font-bold hover:bg-rose-700 transition text-lg">
                    学習を始める →
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
