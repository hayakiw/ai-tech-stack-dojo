<?php
$page_title = 'データ分析の基本 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：データ分析の基礎';
$step_number = 1;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データ分析の基本</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">データ分析とは、データから意味のある情報（インサイト）を引き出し、ビジネスの意思決定を支援すること。AIの登場で、誰でもデータ分析ができる時代になりました。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">データ分析とは</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">データ分析の目的</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-emerald-50 rounded">
                        <div class="text-3xl mb-2">🔍</div>
                        <h4 class="font-bold">現状把握</h4>
                        <p class="text-sm text-gray-600">何が起きているか理解する</p>
                    </div>
                    <div class="text-center p-4 bg-emerald-50 rounded">
                        <div class="text-3xl mb-2">💡</div>
                        <h4 class="font-bold">原因分析</h4>
                        <p class="text-sm text-gray-600">なぜそうなったか探る</p>
                    </div>
                    <div class="text-center p-4 bg-emerald-50 rounded">
                        <div class="text-3xl mb-2">🎯</div>
                        <h4 class="font-bold">予測・提案</h4>
                        <p class="text-sm text-gray-600">次に何をすべきか示す</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">データ分析の流れ</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">1</span>
                        <div>
                            <h4 class="font-bold">課題・目的の明確化</h4>
                            <p class="text-sm text-gray-600">何を知りたいのか、何を解決したいのかを定義</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">2</span>
                        <div>
                            <h4 class="font-bold">データ収集</h4>
                            <p class="text-sm text-gray-600">必要なデータを集める</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">3</span>
                        <div>
                            <h4 class="font-bold">データ加工・整理</h4>
                            <p class="text-sm text-gray-600">分析しやすい形に整える</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">4</span>
                        <div>
                            <h4 class="font-bold">分析・可視化</h4>
                            <p class="text-sm text-gray-600">グラフやチャートで傾向を把握</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">5</span>
                        <div>
                            <h4 class="font-bold">インサイト抽出・報告</h4>
                            <p class="text-sm text-gray-600">発見した洞察をまとめ、アクションを提案</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">ビジネスでの活用例</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">売上分析</h3>
                    <p class="text-sm text-gray-600 mt-1">どの商品が売れているか、いつ売れているか、誰が買っているかを把握</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">顧客分析</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客の属性、行動パターン、離脱リスクを分析</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">Webアクセス分析</h3>
                    <p class="text-sm text-gray-600 mt-1">サイトへの流入経路、ページ閲覧、コンバージョンを追跡</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">業務効率分析</h3>
                    <p class="text-sm text-gray-600 mt-1">業務プロセスのボトルネック、コスト構造を可視化</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AI時代のデータ分析</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="mb-4">AIの登場で、データ分析のハードルは大きく下がりました。</p>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold text-gray-700 mb-2">AIができること</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• データの傾向を自動で発見</li>
                            <li>• 自然言語での分析依頼</li>
                            <li>• グラフ・レポートの自動生成</li>
                            <li>• 異常値・外れ値の検出</li>
                        </ul>
                    </div>
                    <div class="bg-emerald-50 p-4 rounded">
                        <h4 class="font-bold text-emerald-700 mb-2">人間がやるべきこと</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• 分析の目的・課題の設定</li>
                            <li>• ビジネス文脈での解釈</li>
                            <li>• アクションの意思決定</li>
                            <li>• 結果の検証と改善</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">まとめ</h2>
            <div class="bg-emerald-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>データ分析は「現状把握→原因分析→予測・提案」の流れ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>目的を明確にしてから分析を始める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIで分析の効率化が可能に</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>ビジネス判断は人間が行う</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                ホームへ
            </a>
            <a href="data-types.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：データの種類と収集
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
