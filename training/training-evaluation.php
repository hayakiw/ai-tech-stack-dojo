<?php
$page_title = '研修効果測定 - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'advanced';
$section_name = '第4部：応用とサポート';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">研修効果測定</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">研修にどれだけ効果があったのか？カークパトリックモデルを使って、多角的に効果を測定・分析しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">カークパトリックの4レベルモデル</h2>
            <p class="text-gray-600 mb-6">研修効果を4つのレベルで測定する世界標準のフレームワーク。</p>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">Level 1</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg">反応（Reaction）</h3>
                            <p class="text-gray-600 mt-2">受講者の満足度。「研修は良かったか？」</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                                <strong>測定方法：</strong>受講後アンケート（満足度、講師評価、教材評価）
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">Level 2</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg">学習（Learning）</h3>
                            <p class="text-gray-600 mt-2">知識・スキルの習得度。「何を学んだか？」</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                                <strong>測定方法：</strong>理解度テスト、スキルチェック、事前事後比較
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">Level 3</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg">行動（Behavior）</h3>
                            <p class="text-gray-600 mt-2">実務での行動変容。「学んだことを使っているか？」</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                                <strong>測定方法：</strong>上司評価、行動観察、フォローアップ調査（1-3ヶ月後）
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-sky-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">Level 4</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg">結果（Results）</h3>
                            <p class="text-gray-600 mt-2">ビジネス成果への貢献。「業績は上がったか？」</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm">
                                <strong>測定方法：</strong>売上、生産性、顧客満足度、離職率等のKPI
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">効果測定の実践</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-sky-600 mb-4">レベル別の測定タイミング</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-sky-50">
                            <tr>
                                <th class="p-3 text-left">レベル</th>
                                <th class="p-3 text-left">タイミング</th>
                                <th class="p-3 text-left">担当</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            <tr>
                                <td class="p-3">Level 1 反応</td>
                                <td class="p-3">研修直後</td>
                                <td class="p-3">研修担当者</td>
                            </tr>
                            <tr>
                                <td class="p-3">Level 2 学習</td>
                                <td class="p-3">研修直後〜1週間</td>
                                <td class="p-3">研修担当者</td>
                            </tr>
                            <tr>
                                <td class="p-3">Level 3 行動</td>
                                <td class="p-3">1〜3ヶ月後</td>
                                <td class="p-3">上司・研修担当者</td>
                            </tr>
                            <tr>
                                <td class="p-3">Level 4 結果</td>
                                <td class="p-3">3〜6ヶ月後</td>
                                <td class="p-3">経営・人事</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6">
                <h4 class="font-bold mb-2">現実的なアドバイス</h4>
                <p class="text-sm text-gray-600">全てのレベルを測定するのは大変。まずはLevel 1と2から始め、重要な研修のみLevel 3以上を測定する方法も。</p>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">ROI（投資対効果）の考え方</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-4">研修ROIの計算式</h3>
                <div class="bg-gray-100 p-4 rounded text-center mb-4">
                    <span class="text-lg font-mono">ROI（%）= （研修効果の金額 - 研修コスト）÷ 研修コスト × 100</span>
                </div>
                <p class="text-gray-600 mb-4">例：売上向上効果500万円、研修コスト100万円の場合</p>
                <div class="bg-sky-50 p-4 rounded text-center">
                    <span class="font-mono">（500万 - 100万）÷ 100万 × 100 = <strong>400%</strong></span>
                </div>
                <p class="text-sm text-gray-500 mt-4">※効果の金額化は難しいが、経営層への説明には有効</p>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">AIで効果測定を設計</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">営業研修の効果測定計画を作成してください。

【研修内容】提案力向上研修（2日間）
【対象】営業担当者30名
【目的】受注率の向上

カークパトリックの4レベルに沿って、
各レベルで：
1. 測定する指標（KPI）
2. 測定方法・ツール
3. 測定タイミング
4. 誰が測定するか

を具体的に設計してください。</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">まとめ</h2>
            <div class="bg-sky-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>カークパトリックの4レベルで多角的に測定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>反応・学習は研修直後、行動・結果は数ヶ月後</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>ROIで経営層への説明力を高める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>測定結果を次の研修改善に活かす</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="elearning.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：eラーニング・オンライン研修
            </a>
            <a href="next-steps.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
