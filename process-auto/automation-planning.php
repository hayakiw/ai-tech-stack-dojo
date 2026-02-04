<?php
$page_title = '自動化計画の立て方 - AI×業務自動化 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：業務自動化の基礎知識';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">自動化計画の立て方</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">闇雲に自動化を始めても効果は限定的。どの業務を、どの順番で自動化するか、計画を立てることで最大の効果が得られます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">Step 1: 業務の棚卸し</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <p class="text-gray-600 mb-4">まずは日々の業務を書き出して、自動化候補を見つけましょう。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <p class="text-violet-400 mb-2">【AIに依頼】業務棚卸しの質問</p>
                    <pre class="whitespace-pre-wrap">私の日常業務を自動化候補として整理したいです。
以下の情報を元に、自動化できそうな業務をリストアップしてください。

【職種】営業事務
【主な業務】
・メールの確認と返信（1日50件程度）
・見積書・請求書の作成
・顧客データの入力・更新
・週次レポートの作成
・会議の日程調整

各業務について以下を分析してください：
1. 繰り返し頻度（毎日/週1/月1）
2. 1回あたりの所要時間
3. 自動化の難易度（低/中/高）
4. 自動化による効果（時間削減の見込み）</pre>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">Step 2: 優先順位付け</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">自動化優先度マトリックス</h3>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="border-2 border-green-500 p-4 rounded-lg">
                        <h4 class="font-bold text-green-600 mb-2">優先度：高</h4>
                        <p class="text-sm text-gray-600">効果：大 × 難易度：低</p>
                        <p class="text-xs text-gray-500 mt-2">例：定型メールの自動送信</p>
                    </div>
                    <div class="border-2 border-yellow-500 p-4 rounded-lg">
                        <h4 class="font-bold text-yellow-600 mb-2">優先度：中</h4>
                        <p class="text-sm text-gray-600">効果：大 × 難易度：高</p>
                        <p class="text-xs text-gray-500 mt-2">例：複雑なレポート自動生成</p>
                    </div>
                    <div class="border-2 border-blue-500 p-4 rounded-lg">
                        <h4 class="font-bold text-blue-600 mb-2">優先度：中</h4>
                        <p class="text-sm text-gray-600">効果：小 × 難易度：低</p>
                        <p class="text-xs text-gray-500 mt-2">例：通知の自動化</p>
                    </div>
                    <div class="border-2 border-gray-500 p-4 rounded-lg">
                        <h4 class="font-bold text-gray-600 mb-2">優先度：低</h4>
                        <p class="text-sm text-gray-600">効果：小 × 難易度：高</p>
                        <p class="text-xs text-gray-500 mt-2">例：例外処理が多い業務</p>
                    </div>
                </div>
                <p class="text-sm text-gray-600">「効果が大きく、難易度が低い」業務から着手するのが鉄則です。</p>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">Step 3: スモールスタート</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">1</span>
                        <div>
                            <h4 class="font-bold">1つの業務を選ぶ</h4>
                            <p class="text-sm text-gray-600 mt-1">最も効果が高く、シンプルな業務を1つ選択</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">2</span>
                        <div>
                            <h4 class="font-bold">小さく始める</h4>
                            <p class="text-sm text-gray-600 mt-1">完璧を目指さず、まず動くものを作る</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">3</span>
                        <div>
                            <h4 class="font-bold">テスト運用</h4>
                            <p class="text-sm text-gray-600 mt-1">1〜2週間試して問題がないか確認</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">4</span>
                        <div>
                            <h4 class="font-bold">改善・横展開</h4>
                            <p class="text-sm text-gray-600 mt-1">問題を修正し、成功したら次の業務へ</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化を成功させるコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-green-600 mb-2">✓ 成功パターン</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 小さく始めて徐々に拡大</li>
                        <li>• 効果を数値で測定する</li>
                        <li>• 関係者に事前に説明</li>
                        <li>• 失敗時のリカバリー方法を用意</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-red-600 mb-2">✗ 失敗パターン</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 最初から完璧を目指す</li>
                        <li>• 一度に多くの業務を自動化</li>
                        <li>• テストなしで本番運用</li>
                        <li>• 例外処理を考慮しない</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">まとめ</h2>
            <div class="bg-violet-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>まずは業務を棚卸しして自動化候補を洗い出す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>効果×難易度で優先順位をつける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>1つの業務から小さく始める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>テスト→改善→横展開のサイクルで進める</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="automation-tools.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：自動化ツールの紹介
            </a>
            <a href="ai-automation.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：AIで業務を自動化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
