<?php
$page_title = 'AI×営業・セールス | AI Tech Stack';
$current_page = 'home';

include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×営業・セールス</h1>
            <p class="text-xl mb-6 opacity-90">AIを活用して営業力を飛躍的に向上させよう</p>
            <p class="text-lg opacity-75 mb-8">リサーチから提案書作成、商談まで - AIがあなたの営業活動をサポート</p>
            <a href="sales-basics.php" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">
                学習を始める
            </a>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">このコースで学べること</h2>
            <div class="grid md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="font-bold mb-2">営業の基礎</h3>
                    <p class="text-sm text-gray-600">顧客理解から営業プロセスまで基本を習得</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold mb-2">AIツール活用</h3>
                    <p class="text-sm text-gray-600">リサーチ・提案書作成をAIで効率化</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">💼</div>
                    <h3 class="font-bold mb-2">実践テクニック</h3>
                    <p class="text-sm text-gray-600">メール営業・商談・クロージングのコツ</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">📈</div>
                    <h3 class="font-bold mb-2">成果向上</h3>
                    <p class="text-sm text-gray-600">CRM活用で継続的な成果を実現</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 学習ロードマップ -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">学習ロードマップ</h2>
            <div class="max-w-4xl mx-auto space-y-8">
                <!-- 第1部 -->
                <div class="bg-blue-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-blue-600">第1部：営業の基礎知識</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="sales-basics.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm mr-3">1</span>
                                <span>営業の基本</span>
                            </div>
                        </a>
                        <a href="customer-understanding.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm mr-3">2</span>
                                <span>顧客理解</span>
                            </div>
                        </a>
                        <a href="sales-process.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm mr-3">3</span>
                                <span>営業プロセス</span>
                            </div>
                        </a>
                        <a href="communication.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm mr-3">4</span>
                                <span>コミュニケーション術</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第2部 -->
                <div class="bg-indigo-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-indigo-600">第2部：AI×営業ツール</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="ai-tools.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-indigo-500 text-white px-2 py-1 rounded text-sm mr-3">5</span>
                                <span>AI営業ツール入門</span>
                            </div>
                        </a>
                        <a href="ai-research.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-indigo-500 text-white px-2 py-1 rounded text-sm mr-3">6</span>
                                <span>AIでリサーチ</span>
                            </div>
                        </a>
                        <a href="ai-proposal.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-indigo-500 text-white px-2 py-1 rounded text-sm mr-3">7</span>
                                <span>AIで提案書作成</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第3部 -->
                <div class="bg-purple-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-purple-600">第3部：実践テクニック</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="email-sales.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-purple-500 text-white px-2 py-1 rounded text-sm mr-3">8</span>
                                <span>メール営業</span>
                            </div>
                        </a>
                        <a href="online-sales.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-purple-500 text-white px-2 py-1 rounded text-sm mr-3">9</span>
                                <span>オンライン商談</span>
                            </div>
                        </a>
                        <a href="objection-handling.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-purple-500 text-white px-2 py-1 rounded text-sm mr-3">10</span>
                                <span>反論対応</span>
                            </div>
                        </a>
                        <a href="closing.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-purple-500 text-white px-2 py-1 rounded text-sm mr-3">11</span>
                                <span>クロージング</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第4部 -->
                <div class="bg-pink-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-pink-600">第4部：応用とサポート</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="crm-ai.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-pink-500 text-white px-2 py-1 rounded text-sm mr-3">12</span>
                                <span>CRM×AI活用</span>
                            </div>
                        </a>
                        <a href="next-steps.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-pink-500 text-white px-2 py-1 rounded text-sm mr-3">13</span>
                                <span>次のステップ</span>
                            </div>
                        </a>
                        <a href="glossary.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-pink-500 text-white px-2 py-1 rounded text-sm mr-3">14</span>
                                <span>用語集</span>
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
            <h2 class="text-3xl font-bold mb-6">AIで営業力を高めよう</h2>
            <p class="text-xl mb-8 opacity-90">効率的な営業活動で、成果を最大化しましょう</p>
            <a href="sales-basics.php" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">
                今すぐ始める
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
