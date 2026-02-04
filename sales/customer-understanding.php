<?php
$page_title = '顧客理解 - AI×営業・セールス | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：営業の基礎知識';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">顧客理解</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">「顧客を知ること」が営業の出発点。相手の業界、課題、意思決定プロセスを理解することで、的確な提案ができます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">顧客理解の5つの視点</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h3 class="font-bold text-lg">業界・市場</h3>
                            <p class="text-gray-600 mt-1">業界のトレンド、競合状況、市場規模を把握する</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h3 class="font-bold text-lg">企業情報</h3>
                            <p class="text-gray-600 mt-1">売上、従業員数、事業内容、経営方針を調べる</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h3 class="font-bold text-lg">課題・ニーズ</h3>
                            <p class="text-gray-600 mt-1">現在抱えている問題、達成したい目標を理解する</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h3 class="font-bold text-lg">意思決定者</h3>
                            <p class="text-gray-600 mt-1">誰が決裁権を持つか、キーパーソンは誰かを特定</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-blue-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">5</div>
                        <div>
                            <h3 class="font-bold text-lg">購買プロセス</h3>
                            <p class="text-gray-600 mt-1">検討〜導入までの流れ、予算サイクルを把握</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AIで顧客リサーチ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-blue-600">企業分析プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の企業について分析してください。

【企業名】株式会社○○
【調べたいこと】
・事業内容と主力製品/サービス
・最近のニュースやプレスリリース
・業界での位置づけと競合
・想定される課題やニーズ

営業提案に活かせる視点でまとめてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-blue-600">業界分析プロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">○○業界について、営業視点で分析してください。

【知りたいこと】
・業界の市場規模とトレンド
・主要プレイヤーと競争環境
・業界共通の課題
・今後の成長機会

BtoBの営業活動に活かせる洞察を含めてください。</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">顧客理解を深める質問</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">現状を聞く</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 「現在どのような方法で〜されていますか？」</li>
                        <li>• 「今のやり方で困っていることは？」</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">理想を聞く</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 「理想的にはどうなるとよいですか？」</li>
                        <li>• 「目標達成の障壁は何でしょうか？」</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">優先度を聞く</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 「最も重要な課題は何ですか？」</li>
                        <li>• 「いつまでに解決したいですか？」</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">意思決定を聞く</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 「導入の判断基準は何ですか？」</li>
                        <li>• 「他にご確認が必要な方は？」</li>
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
                        <span>顧客理解は業界・企業・課題・意思決定者・購買プロセスの5視点</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AIを活用して企業・業界リサーチを効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>商談では適切な質問で顧客の本音を引き出す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>理解が深いほど、的確な提案ができる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="sales-basics.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：営業の基本
            </a>
            <a href="sales-process.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：営業プロセス
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
