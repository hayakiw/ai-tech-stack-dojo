<?php
$page_title = '営業プロセス - AI×営業・セールス | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：営業の基礎知識';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">営業プロセス</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">営業活動を「プロセス」として捉えることで、再現性のある成果を出せるようになります。各段階で何をすべきかを明確にしましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">営業プロセスの7ステップ</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-300">
                    <div class="flex items-center mb-2">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full font-bold mr-3">1</span>
                        <h3 class="font-bold text-lg">リード獲得</h3>
                    </div>
                    <p class="text-gray-600 ml-12">見込み客を見つける。展示会、Web問い合わせ、紹介など</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-400">
                    <div class="flex items-center mb-2">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full font-bold mr-3">2</span>
                        <h3 class="font-bold text-lg">アプローチ</h3>
                    </div>
                    <p class="text-gray-600 ml-12">初回コンタクト。メール、電話、SNSでのアプローチ</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-blue-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-blue-500 text-white px-3 py-1 rounded-full font-bold mr-3">3</span>
                        <h3 class="font-bold text-lg">ヒアリング</h3>
                    </div>
                    <p class="text-gray-600 ml-12">顧客の課題やニーズを深く聞き出す</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-indigo-400">
                    <div class="flex items-center mb-2">
                        <span class="bg-indigo-500 text-white px-3 py-1 rounded-full font-bold mr-3">4</span>
                        <h3 class="font-bold text-lg">提案</h3>
                    </div>
                    <p class="text-gray-600 ml-12">課題解決の方法を提示。提案書、デモ、見積もり</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-indigo-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-indigo-500 text-white px-3 py-1 rounded-full font-bold mr-3">5</span>
                        <h3 class="font-bold text-lg">交渉</h3>
                    </div>
                    <p class="text-gray-600 ml-12">条件のすり合わせ。価格、納期、仕様の調整</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-purple-400">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-500 text-white px-3 py-1 rounded-full font-bold mr-3">6</span>
                        <h3 class="font-bold text-lg">クロージング</h3>
                    </div>
                    <p class="text-gray-600 ml-12">契約・受注の獲得。最終的な意思決定を促す</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow border-l-4 border-purple-500">
                    <div class="flex items-center mb-2">
                        <span class="bg-purple-500 text-white px-3 py-1 rounded-full font-bold mr-3">7</span>
                        <h3 class="font-bold text-lg">フォローアップ</h3>
                    </div>
                    <p class="text-gray-600 ml-12">納品後のサポート。追加提案、紹介依頼</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">パイプライン管理</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-blue-600">パイプラインとは？</h3>
                <p class="text-gray-600 mb-4">営業プロセスの各段階にある案件を可視化したもの。どの案件がどの段階にあるかを把握し、売上予測や優先順位づけに活用します。</p>

                <div class="overflow-x-auto">
                    <div class="flex gap-2 min-w-max">
                        <div class="bg-blue-100 p-3 rounded text-center w-24">
                            <div class="text-sm font-bold text-blue-700">リード</div>
                            <div class="text-2xl font-bold text-blue-600">15件</div>
                        </div>
                        <div class="text-gray-400 flex items-center">→</div>
                        <div class="bg-blue-200 p-3 rounded text-center w-24">
                            <div class="text-sm font-bold text-blue-700">商談中</div>
                            <div class="text-2xl font-bold text-blue-600">8件</div>
                        </div>
                        <div class="text-gray-400 flex items-center">→</div>
                        <div class="bg-indigo-200 p-3 rounded text-center w-24">
                            <div class="text-sm font-bold text-indigo-700">提案済</div>
                            <div class="text-2xl font-bold text-indigo-600">5件</div>
                        </div>
                        <div class="text-gray-400 flex items-center">→</div>
                        <div class="bg-purple-200 p-3 rounded text-center w-24">
                            <div class="text-sm font-bold text-purple-700">交渉中</div>
                            <div class="text-2xl font-bold text-purple-600">3件</div>
                        </div>
                        <div class="text-gray-400 flex items-center">→</div>
                        <div class="bg-green-200 p-3 rounded text-center w-24">
                            <div class="text-sm font-bold text-green-700">受注</div>
                            <div class="text-2xl font-bold text-green-600">2件</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">重要な指標</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 各段階の案件数</li>
                        <li>• 段階間の転換率</li>
                        <li>• 平均商談期間</li>
                        <li>• 受注率（クローズ率）</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">管理ツール</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• Salesforce</li>
                        <li>• HubSpot</li>
                        <li>• Pipedrive</li>
                        <li>• スプレッドシート</li>
                    </ul>
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
                        <span>営業プロセスは7ステップで構成される</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>各ステップで何をすべきか明確にする</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>パイプライン管理で案件状況を可視化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>転換率を分析して改善ポイントを特定</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="customer-understanding.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：顧客理解
            </a>
            <a href="communication.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：コミュニケーション術
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
