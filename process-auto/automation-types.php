<?php
$page_title = '自動化の種類 - AI×業務自動化 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：業務自動化の基礎知識';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">自動化の種類</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">業務自動化にはさまざまなアプローチがあります。RPA、API連携、ノーコードツールなど、それぞれの特徴を理解して最適な方法を選びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化技術の種類</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🤖</div>
                        <div>
                            <h3 class="font-bold text-lg text-violet-600">RPA（ロボティック・プロセス・オートメーション）</h3>
                            <p class="text-sm text-gray-600 mt-2">PCの操作を記録・再生して自動化。マウスクリックやキーボード入力を再現。</p>
                            <div class="mt-3 bg-violet-50 p-3 rounded text-sm">
                                <span class="font-bold">向いている業務：</span>既存システムの操作、画面入力作業、レガシーシステムとの連携
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🔗</div>
                        <div>
                            <h3 class="font-bold text-lg text-violet-600">API連携</h3>
                            <p class="text-sm text-gray-600 mt-2">ソフトウェア同士をAPIで接続して自動連携。データのやり取りをプログラムで制御。</p>
                            <div class="mt-3 bg-violet-50 p-3 rounded text-sm">
                                <span class="font-bold">向いている業務：</span>クラウドサービス間の連携、データ同期、リアルタイム処理
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📦</div>
                        <div>
                            <h3 class="font-bold text-lg text-violet-600">ノーコード/ローコードツール</h3>
                            <p class="text-sm text-gray-600 mt-2">プログラミング不要で自動化フローを構築。ドラッグ&ドロップで簡単に設定。</p>
                            <div class="mt-3 bg-violet-50 p-3 rounded text-sm">
                                <span class="font-bold">向いている業務：</span>アプリ連携、通知・アラート、シンプルなワークフロー
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🧠</div>
                        <div>
                            <h3 class="font-bold text-lg text-violet-600">AI自動化</h3>
                            <p class="text-sm text-gray-600 mt-2">AIが内容を理解・判断して処理。文章生成、データ分析、意思決定の自動化。</p>
                            <div class="mt-3 bg-violet-50 p-3 rounded text-sm">
                                <span class="font-bold">向いている業務：</span>文章作成、メール対応、データ分析、問い合わせ対応
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">比較表</h2>

            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2 text-violet-600">種類</th>
                            <th class="text-left py-2 text-violet-600">難易度</th>
                            <th class="text-left py-2 text-violet-600">コスト</th>
                            <th class="text-left py-2 text-violet-600">柔軟性</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 font-bold">RPA</td>
                            <td class="py-3">中〜高</td>
                            <td class="py-3">高め</td>
                            <td class="py-3">高い</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">API連携</td>
                            <td class="py-3">高</td>
                            <td class="py-3">低〜中</td>
                            <td class="py-3">非常に高い</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">ノーコード</td>
                            <td class="py-3">低</td>
                            <td class="py-3">低〜中</td>
                            <td class="py-3">中程度</td>
                        </tr>
                        <tr>
                            <td class="py-3 font-bold">AI自動化</td>
                            <td class="py-3">低〜中</td>
                            <td class="py-3">低〜中</td>
                            <td class="py-3">非常に高い</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">初心者へのおすすめ</h2>

            <div class="bg-gradient-to-r from-violet-500 to-purple-500 text-white p-6 rounded-lg">
                <h3 class="font-bold text-xl mb-4">まずは「ノーコード × AI」から始めよう</h3>
                <p class="mb-4">プログラミング知識がなくても始められ、AIの力で高度な自動化が可能。</p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="mr-2">✓</span>
                        <span>Zapier + ChatGPT/Claude</span>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✓</span>
                        <span>Google Apps Script + AI</span>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✓</span>
                        <span>Make (Integromat) + AI</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">まとめ</h2>
            <div class="bg-violet-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>RPA：PC操作の自動化（レガシーシステムに有効）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>API連携：サービス間の高度な連携（開発スキル必要）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>ノーコード：手軽に始められる自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AI自動化：判断を含む高度な自動化が可能</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="automation-basics.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：業務自動化とは
            </a>
            <a href="automation-tools.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：自動化ツールの紹介
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
