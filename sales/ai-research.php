<?php
$page_title = 'AIでリサーチ - AI×営業・セールス | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×営業ツール';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでリサーチ</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">商談前のリサーチは営業の成否を左右します。AIを使えば、企業分析、業界動向、競合情報を効率的に収集できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">企業リサーチ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-blue-600">企業の基本情報を調べる</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の企業について、営業提案に役立つ情報をまとめてください。

【企業名】株式会社〇〇
【調べたい項目】
1. 事業内容と主力製品・サービス
2. 企業規模（売上、従業員数）
3. 最近のニュース・プレスリリース
4. 経営理念・ビジョン
5. 想定される課題やニーズ

営業として話すべきポイントも提案してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-blue-600">決裁者・キーパーソンを特定</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">BtoB営業において、以下の製品/サービスを提案する場合、
一般的にどの部門・役職の方が決裁者になりますか？

【提案内容】〇〇システムの導入
【顧客企業規模】従業員500名程度の製造業

決裁者とインフルエンサー（影響力を持つ人）それぞれについて教えてください。</pre>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">業界・市場リサーチ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-blue-600">業界トレンド分析</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">〇〇業界について、以下の観点で分析してください。

1. 市場規模と成長率
2. 主要プレイヤーとシェア
3. 業界共通の課題
4. 最新のトレンドと技術動向
5. 規制や法改正の影響

この業界に営業する際のアプローチのポイントも教えてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-blue-600">競合分析</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">当社製品「〇〇」の競合製品を分析してください。

【当社製品の特徴】
・機能A、機能B、機能C
・価格帯：月額〇万円

【比較してほしい項目】
・機能の違い
・価格比較
・強み・弱み
・ターゲット層の違い

顧客への差別化ポイントの説明方法も提案してください。</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">リサーチを活かす</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">商談前</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 企業の課題仮説を立てる</li>
                        <li>• 業界特有の話題を準備</li>
                        <li>• 質問リストを作成</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">商談中</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 業界知識で信頼を獲得</li>
                        <li>• 課題仮説をぶつけて反応を見る</li>
                        <li>• 競合との違いを明確に説明</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">提案時</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 業界事例を引用</li>
                        <li>• ROIを具体的に示す</li>
                        <li>• 顧客の言葉を使って説明</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-blue-600 mb-2">フォロー時</h4>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 業界ニュースを共有</li>
                        <li>• 関連情報を定期的に提供</li>
                        <li>• 信頼関係を継続的に構築</li>
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
                        <span>AIで企業情報、業界動向、競合を効率的にリサーチ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>具体的なプロンプトで的確な情報を引き出す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>リサーチ結果は商談の各段階で活用</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>業界知識は信頼獲得の武器になる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-tools.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AI営業ツール入門
            </a>
            <a href="ai-proposal.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：AIで提案書作成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
