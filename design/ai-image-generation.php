<?php
$page_title = 'AI画像生成 - AI×デザイン | AI Tech Stack';
$current_page = 'ai-skills';
$section_name = '第2部：AI×デザインスキル';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI画像生成</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">DALL-E、Midjourney、Stable Diffusion—テキストから画像を生成するAIツールが革命を起こしています。プロンプトの書き方次第で、思い通りの画像が作れます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">主要なAI画像生成ツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🎨</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">DALL-E 3（OpenAI / ChatGPT）</h3>
                            <p class="text-gray-600 mt-2">自然な日本語プロンプトでも高品質な画像を生成。ChatGPT Plus/Proで利用可能。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">日本語対応</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">テキスト描画可能</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">商用利用可</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🌟</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Midjourney</h3>
                            <p class="text-gray-600 mt-2">アート性の高い画像生成が得意。Discord経由で利用。スタイリッシュな仕上がり。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-pink-100 text-pink-700 px-2 py-1 rounded text-xs">高品質</span>
                                <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs">アート向き</span>
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs">有料のみ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🔓</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Stable Diffusion</h3>
                            <p class="text-gray-600 mt-2">オープンソース。ローカルで動かせる。カスタマイズ性が高い。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">オープンソース</span>
                                <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-xs">技術知識必要</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">✨</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Gemini（Imagen）</h3>
                            <p class="text-gray-600 mt-2">Google製の画像生成AI。Gemini Advanced/Ultraで利用可能。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">日本語対応</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Google連携</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">プロンプトの書き方</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-fuchsia-600 mb-4">基本構造</h3>
                <div class="bg-gray-100 p-4 rounded text-sm">
                    <p><strong>被写体</strong> + <strong>スタイル</strong> + <strong>環境/背景</strong> + <strong>照明/色調</strong> + <strong>品質指定</strong></p>
                </div>
            </div>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">例1：商品写真風</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">A minimalist product photo of a white ceramic coffee cup,
on a wooden table, soft natural lighting from the left,
clean white background, professional studio photography,
high resolution, 4k</pre>
                    </div>
                    <p class="text-sm text-gray-600 mt-3">→ ミニマルな商品写真スタイルで白いマグカップを生成</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">例2：イラスト風</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">カフェでコーヒーを飲みながら本を読む女性、
水彩画風、パステルカラー、
温かみのある雰囲気、居心地の良い空間</pre>
                    </div>
                    <p class="text-sm text-gray-600 mt-3">→ 日本語でも自然なプロンプトでOK（DALL-E 3）</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">例3：ロゴデザイン用</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">シンプルでモダンなロゴデザイン、
カフェ「Coffee Garden」用、
緑の葉っぱとコーヒーカップのモチーフ、
ミニマリスト、フラットデザイン、
白い背景、ベクターアートスタイル</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">便利なキーワード集</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">スタイル</h4>
                    <p class="text-sm text-gray-600">watercolor, oil painting, digital art, flat design, minimalist, vintage, retro, anime style</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">照明</h4>
                    <p class="text-sm text-gray-600">soft lighting, dramatic lighting, golden hour, studio lighting, backlight, neon</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">品質</h4>
                    <p class="text-sm text-gray-600">high quality, 4k, 8k, detailed, sharp focus, professional, masterpiece</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">構図</h4>
                    <p class="text-sm text-gray-600">close-up, wide shot, bird's eye view, symmetrical, centered, rule of thirds</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>DALL-E 3：日本語OK、テキスト描画可能、商用利用可</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>Midjourney：アート性が高く美しい仕上がり</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>プロンプト：被写体+スタイル+環境+照明+品質</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>何度も生成して良いものを選ぶ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-design-tools.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIデザインツール
            </a>
            <a href="ai-design-workflow.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：AIデザインワークフロー
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
