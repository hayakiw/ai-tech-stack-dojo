<?php
$page_title = '営業の基本 - AI×営業・セールス | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：営業の基礎知識';
$step_number = 1;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">営業の基本</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">営業とは「顧客の課題を解決すること」。単なる売り込みではなく、価値を提供するパートナーになることが成功の鍵です。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">営業の本質</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-blue-600">営業とは何か？</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-red-500 text-xl mr-3">✗</span>
                        <div>
                            <p class="font-bold">商品を売り込むこと</p>
                            <p class="text-sm text-gray-600">押し売りは信頼を失う</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <div>
                            <p class="font-bold">顧客の課題を解決すること</p>
                            <p class="text-sm text-gray-600">価値を提供することで自然と売れる</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-blue-600">成功する営業の3つの要素</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-blue-50 rounded">
                        <div class="text-3xl mb-2">👂</div>
                        <h4 class="font-bold">傾聴力</h4>
                        <p class="text-sm text-gray-600">顧客の話を聴く</p>
                    </div>
                    <div class="text-center p-4 bg-blue-50 rounded">
                        <div class="text-3xl mb-2">🎯</div>
                        <h4 class="font-bold">課題発見力</h4>
                        <p class="text-sm text-gray-600">本当の問題を見つける</p>
                    </div>
                    <div class="text-center p-4 bg-blue-50 rounded">
                        <div class="text-3xl mb-2">💡</div>
                        <h4 class="font-bold">提案力</h4>
                        <p class="text-sm text-gray-600">最適な解決策を提示</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">営業の種類</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">新規営業</h3>
                    <p class="text-sm text-gray-600 mt-1">まだ取引のない見込み客にアプローチ。難易度は高いが、成長の源泉。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">既存営業（ルート営業）</h3>
                    <p class="text-sm text-gray-600 mt-1">既存顧客との関係を深め、リピートやアップセルを狙う。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">インサイドセールス</h3>
                    <p class="text-sm text-gray-600 mt-1">電話やメール、Web会議で非対面で行う営業。効率的なアプローチが可能。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">フィールドセールス</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客先を訪問する対面営業。信頼関係を構築しやすい。</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AI時代の営業</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">AIの登場で、営業の仕事は大きく変わりつつあります。</p>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-gray-700 mb-2">AIができること</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• 顧客リサーチの自動化</li>
                            <li>• 提案書・メールの下書き作成</li>
                            <li>• データ分析と予測</li>
                            <li>• スケジュール管理</li>
                        </ul>
                    </div>
                    <div class="bg-blue-50 p-4 rounded">
                        <h4 class="font-bold text-blue-700 mb-2">人間がやるべきこと</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• 信頼関係の構築</li>
                            <li>• 感情を読み取る</li>
                            <li>• 創造的な提案</li>
                            <li>• 最終的な意思決定</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">まとめ</h2>
            <div class="bg-blue-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>営業は「売る」ではなく「課題を解決する」こと</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>傾聴力・課題発見力・提案力が成功の鍵</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AI時代は「人間にしかできないこと」に集中</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AIをツールとして活用し、効率を上げる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                ホームへ
            </a>
            <a href="customer-understanding.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：顧客理解
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
