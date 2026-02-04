<?php
$page_title = 'AIで画像生成 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIで画像生成</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Webサイトに必要な画像もAIで生成できます。ヒーロー画像、アイコン、背景パターンなど、様々な素材を作成しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">画像生成AIツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🎨</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Midjourney</h3>
                            <p class="text-gray-600 mb-2">高品質なアート風画像が得意。Discordで利用。</p>
                            <p class="text-sm text-orange-600">月額$10〜</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🖼️</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Gemini (nanobanana)</h3>
                            <p class="text-gray-600 mb-2">Google AIプラットフォーム内で利用可能。指示に忠実。</p>
                            <p class="text-sm text-orange-600">Gemini Advanced（月額料金内）に含まれる※無料枠有り</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🎭</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Stable Diffusion</h3>
                            <p class="text-gray-600 mb-2">オープンソース。ローカルで無料利用可能。</p>
                            <p class="text-sm text-orange-600">無料（要PC性能）</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">✨</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Canva AI</h3>
                            <p class="text-gray-600 mb-2">デザインツール内で画像生成。初心者向け。</p>
                            <p class="text-sm text-orange-600">無料枠あり / Pro $12.99/月</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Webサイトで使える画像を生成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">ヒーロー画像</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">プロンプト例：

「モダンなオフィスで働くビジネスパーソン。
明るい自然光が差し込む、ミニマルなインテリア。
人物は後ろ姿またはシルエット。
青と白を基調としたクリーンな雰囲気。
16:9のアスペクト比、Webサイトのヒーロー画像用」</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">アイコン・イラスト</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">プロンプト例：

「フラットデザインのアイコンセット。
テーマ：Webサービス（クラウド、セキュリティ、速度、サポート）
色：青とオレンジのアクセント、白背景。
シンプルで統一感のあるスタイル。
SVGのようなクリーンな線。」</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">背景パターン</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">プロンプト例：

「シームレスな幾何学模様。
淡いグレーと白のミニマルなデザイン。
微妙なグラデーション。
Webサイトの背景用、タイル状に繰り返し可能。」</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">画像生成のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">スタイルを指定</h4>
                    <p class="text-sm text-gray-600">「写真風」「イラスト」「フラットデザイン」「3D」など</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">色を具体的に</h4>
                    <p class="text-sm text-gray-600">「青と白」「パステルカラー」「モノクロ」など</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">用途を伝える</h4>
                    <p class="text-sm text-gray-600">「Webサイトのヒーロー画像」「SNS用」など</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-orange-600 mb-2">アスペクト比を指定</h4>
                    <p class="text-sm text-gray-600">「16:9」「正方形」「縦長」など</p>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">注意点</h2>

            <div class="space-y-4">
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">著作権・商用利用</h4>
                        <p class="text-sm text-gray-600">各サービスの利用規約を確認。商用利用OKか確認してから使いましょう。</p>
                    </div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">人物の顔</h4>
                        <p class="text-sm text-gray-600">AI生成の人物はまだ不自然な場合も。後ろ姿やシルエットが安全。</p>
                    </div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">ファイルサイズ</h4>
                        <p class="text-sm text-gray-600">Webで使う前に圧縮を。TinyPNGやSquooshで最適化。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Midjourney、Nano-Banana、DALL-E、Canva AIなどで画像生成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>スタイル、色、用途、サイズを具体的に指定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>商用利用の可否は必ず確認</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Web用に画像を圧縮してから使用</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-coding.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでコーディング支援
            </a>
            <a href="practice-portfolio.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：ポートフォリオサイト制作
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
