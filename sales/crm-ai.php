<?php
$page_title = 'CRM×AI活用 - AI×営業・セールス | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：応用とサポート';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">CRM×AI活用</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">CRM（顧客管理システム）とAIを組み合わせることで、営業活動をさらに効率化・高度化できます。データドリブンな営業を実現しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">CRMの基本機能</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">顧客情報管理</h4>
                    <p class="text-sm text-gray-600">連絡先、商談履歴、コミュニケーション記録を一元管理</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">パイプライン管理</h4>
                    <p class="text-sm text-gray-600">案件の進捗状況を可視化し、売上予測を精度向上</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">活動管理</h4>
                    <p class="text-sm text-gray-600">タスク、スケジュール、アラートで漏れを防止</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">レポート・分析</h4>
                    <p class="text-sm text-gray-600">営業成績、KPIをダッシュボードで確認</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AI搭載CRMの機能</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🎯</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">リードスコアリング</h3>
                            <p class="text-gray-600 mb-2">AIが見込み客の成約確度を自動で予測。優先すべきリードを特定</p>
                            <p class="text-sm text-blue-600">例：Salesforce Einstein、HubSpot AI</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📈</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">売上予測</h3>
                            <p class="text-gray-600 mb-2">過去データから将来の売上をAIが予測。精度の高い計画立案が可能</p>
                            <p class="text-sm text-blue-600">例：パイプラインの確度×金額を自動計算</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">⚡</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">次のアクション提案</h3>
                            <p class="text-gray-600 mb-2">商談の状況に応じて、最適なアクションをAIが提案</p>
                            <p class="text-sm text-blue-600">例：「このリードには電話よりメールが効果的」</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📝</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">自動データ入力</h3>
                            <p class="text-gray-600 mb-2">メールや会議から情報を自動抽出してCRMに登録</p>
                            <p class="text-sm text-blue-600">例：議事録から次回アクションを自動登録</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">CRMを活用した営業改善</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-blue-600">分析すべきKPI</h3>
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2 text-blue-600">指標</th>
                            <th class="text-left py-2 text-blue-600">意味</th>
                            <th class="text-left py-2 text-blue-600">改善アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3">リード→商談率</td>
                            <td class="py-3">アプローチの効果</td>
                            <td class="py-3">メール・電話の改善</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3">商談→提案率</td>
                            <td class="py-3">ヒアリングの質</td>
                            <td class="py-3">質問力の向上</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3">提案→成約率</td>
                            <td class="py-3">提案の質</td>
                            <td class="py-3">提案書・クロージング改善</td>
                        </tr>
                        <tr>
                            <td class="py-3">平均商談期間</td>
                            <td class="py-3">営業サイクル</td>
                            <td class="py-3">ボトルネック特定</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">代表的なCRMツール</h2>

            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-blue-600 mb-2">Salesforce</h4>
                    <p class="text-sm text-gray-600">大企業向け。機能豊富でカスタマイズ性高い</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-blue-600 mb-2">HubSpot</h4>
                    <p class="text-sm text-gray-600">中小企業向け。無料プランあり。使いやすい</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-blue-600 mb-2">Pipedrive</h4>
                    <p class="text-sm text-gray-600">営業特化。パイプライン管理が直感的</p>
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
                        <span>CRMで顧客情報と営業活動を一元管理</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AI機能でリードスコアリング、売上予測を自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>KPIを分析して営業活動を継続的に改善</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>データドリブンな営業で成果を最大化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="closing.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：クロージング
            </a>
            <a href="next-steps.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
