<?php
$page_title = 'AI研修ツール - AI×人材育成・教育 | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×研修設計';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI研修ツール</h1>

        <!-- イントロ -->
        <div class="bg-sky-50 border-l-4 border-sky-500 p-6 mb-8">
            <p class="text-lg">人材育成に活用できるAIツールを紹介。研修設計から教材作成、効果測定まで、AIで効率化しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">汎用AIツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">💬</div>
                        <div>
                            <h3 class="font-bold text-lg text-sky-600">ChatGPT / Claude</h3>
                            <p class="text-gray-600 mt-2">研修設計の相談相手として最適。カリキュラム作成、教材執筆、ケーススタディ作成など幅広く活用。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded text-xs">研修企画</span>
                                <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded text-xs">教材作成</span>
                                <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded text-xs">テスト作成</span>
                                <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded text-xs">Q&A対応</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🔍</div>
                        <div>
                            <h3 class="font-bold text-lg text-sky-600">Perplexity / NotebookLM</h3>
                            <p class="text-gray-600 mt-2">情報収集と整理に特化。研修コンテンツのリサーチ、最新トレンド調査に活用。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded text-xs">リサーチ</span>
                                <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded text-xs">情報整理</span>
                                <span class="bg-sky-100 text-sky-700 px-2 py-1 rounded text-xs">要約</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">教材作成向けツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📊</div>
                        <div>
                            <h3 class="font-bold text-lg text-sky-600">Gamma / Beautiful.ai</h3>
                            <p class="text-gray-600 mt-2">AIでプレゼン資料を自動生成。テキストから美しいスライドを作成。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">スライド作成</span>
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">デザイン自動化</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🎥</div>
                        <div>
                            <h3 class="font-bold text-lg text-sky-600">Synthesia / HeyGen</h3>
                            <p class="text-gray-600 mt-2">AIアバターが講師役を担当。多言語の研修動画を効率的に作成。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">動画生成</span>
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">多言語対応</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🎨</div>
                        <div>
                            <h3 class="font-bold text-lg text-sky-600">Canva / Adobe Firefly</h3>
                            <p class="text-gray-600 mt-2">研修資料のビジュアル作成。図解、イラスト、インフォグラフィック。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">画像生成</span>
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">デザイン</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">研修運営・評価向けツール</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">Mentimeter / Slido</h3>
                    <p class="text-sm text-gray-600">リアルタイム投票・Q&A。研修中のインタラクション向上。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">Typeform / Google Forms</h3>
                    <p class="text-sm text-gray-600">アンケート・テスト作成。研修効果測定に活用。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">Notion AI / Coda</h3>
                    <p class="text-sm text-gray-600">研修マニュアル・ナレッジベース構築。</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow">
                    <h3 class="font-bold text-sky-600 mb-2">Otter.ai / tl;dv</h3>
                    <p class="text-sm text-gray-600">研修の自動文字起こし・要約。</p>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-sky-200">AIツール選定の相談</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-sky-600 mb-3">プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の研修を効率化するためのAIツールを提案してください。

【現状の課題】
・毎月、新入社員向け研修を実施
・資料作成に毎回3日かかる
・講師の時間確保が難しい
・効果測定ができていない

【予算】月5万円程度

導入優先度が高いものから3つ、具体的な活用方法と共に教えてください。</pre>
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
                        <span>ChatGPT/Claudeは研修設計の万能アシスタント</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>教材作成は専用ツールで大幅効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>目的に応じてツールを組み合わせる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-sky-600 mr-2">✓</span>
                        <span>まずは汎用AIから始めて徐々に拡張</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="training-methods.php" class="flex items-center text-gray-600 hover:text-sky-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：研修手法・形式
            </a>
            <a href="ai-content-creation.php" class="flex items-center bg-sky-600 text-white px-6 py-3 rounded-lg hover:bg-sky-700">
                次へ：AI教材作成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
