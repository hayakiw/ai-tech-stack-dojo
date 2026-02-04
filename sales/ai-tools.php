<?php
$page_title = 'AI営業ツール入門 - AI×営業・セールス | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×営業ツール';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI営業ツール入門</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">AIツールを活用すれば、リサーチ、文章作成、データ分析など、営業活動の多くを効率化できます。代表的なツールと活用法を学びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">営業で使えるAIツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">💬</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">ChatGPT / Claude</h3>
                            <p class="text-gray-600 mb-2">汎用AI。文章作成、リサーチ、アイデア出しなど幅広く活用</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">メール作成</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">提案書</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">リサーチ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📊</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">営業支援AI（SFA連携）</h3>
                            <p class="text-gray-600 mb-2">Salesforce Einstein、HubSpot AIなど。CRMと連携した予測・分析</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded text-xs">リードスコアリング</span>
                                <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded text-xs">売上予測</span>
                                <span class="bg-indigo-100 text-indigo-700 px-2 py-1 rounded text-xs">自動化</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🎯</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">セールスインテリジェンス</h3>
                            <p class="text-gray-600 mb-2">LinkedIn Sales Navigator、Zoominfo など。見込み客の発見・情報収集</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">リード発掘</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">企業情報</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">担当者特定</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📝</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">文書作成AI</h3>
                            <p class="text-gray-600 mb-2">Notion AI、Jasperなど。提案書、レポートの作成支援</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">ドキュメント</span>
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">要約</span>
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">翻訳</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AIツール活用の基本</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">1. 目的を明確に</h4>
                    <p class="text-sm text-gray-600">何を達成したいのか、具体的なゴールを設定してからツールを使う</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">2. 情報は具体的に</h4>
                    <p class="text-sm text-gray-600">AIへの入力は詳細に。背景情報や条件を明確に伝える</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">3. 出力は必ず確認</h4>
                    <p class="text-sm text-gray-600">AIの出力は参考。最終確認と修正は人間が行う</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">4. 機密情報に注意</h4>
                    <p class="text-sm text-gray-600">顧客情報や社外秘データの取り扱いに注意</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">営業活動別AI活用法</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2 text-blue-600">営業活動</th>
                            <th class="text-left py-2 text-blue-600">AI活用例</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3">リード獲得</td>
                            <td class="py-3">ターゲット企業の自動リストアップ</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3">アプローチ</td>
                            <td class="py-3">パーソナライズされたメール文作成</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3">商談準備</td>
                            <td class="py-3">企業・業界分析レポート生成</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3">提案</td>
                            <td class="py-3">提案書・見積書の下書き作成</td>
                        </tr>
                        <tr>
                            <td class="py-3">フォローアップ</td>
                            <td class="py-3">議事録作成、次回アクション提案</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">まとめ</h2>
            <div class="bg-blue-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>ChatGPT/Claudeは万能。まずはここから始める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>目的を明確にし、具体的な情報を入力する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AIの出力は必ず確認・修正してから使う</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>機密情報の取り扱いには十分注意</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="communication.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：コミュニケーション術
            </a>
            <a href="ai-research.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：AIでリサーチ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
