<?php
$page_title = 'SNSマーケティング - AI×占い・スピリチュアル | AI Tech Stack';
$current_page = 'marketing';
$section_name = '第2部：集客・マーケティング';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">SNSマーケティング</h1>

    <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
        <p class="text-lg">SNSは占い師・スピリチュアルカウンセラーにとって最強の集客ツール。AIを活用して継続的な発信を実現する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">毎日の占いコンテンツ</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">12星座占い投稿プロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        今日の12星座占いを作成してください。<br><br>
                        【日付】2024年○月○日<br>
                        【曜日】○曜日<br><br>
                        【各星座に含める内容】<br>
                        ・今日の運勢（一言）<br>
                        ・ラッキーカラー<br>
                        ・アドバイス（2〜3行）<br><br>
                        【条件】<br>
                        ・前向きでポジティブなトーン<br>
                        ・具体的で行動につながるアドバイス<br>
                        ・Instagram投稿向けの読みやすい形式
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">今日のタロットメッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        今日のタロットメッセージを作成してください。<br><br>
                        【今日引いたカード】〇〇（正位置/逆位置）<br><br>
                        【含める内容】<br>
                        ・カードからのメッセージ<br>
                        ・今日の過ごし方のヒント<br>
                        ・心に留めておきたい言葉<br><br>
                        【条件】<br>
                        ・神秘的で詩的な表現<br>
                        ・Instagram投稿向け<br>
                        ・200文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">プラットフォーム別戦略</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">Instagram</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-purple-50 p-4 rounded">
                        <h4 class="font-bold mb-2">向いているコンテンツ</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>・毎日の星座占い（カルーセル）</li>
                            <li>・タロットカードの意味解説</li>
                            <li>・鑑定のビフォーアフター</li>
                            <li>・リールで短い占い動画</li>
                        </ul>
                    </div>
                    <div class="bg-purple-50 p-4 rounded">
                        <h4 class="font-bold mb-2">投稿のコツ</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>・世界観を統一したデザイン</li>
                            <li>・ハッシュタグを効果的に使用</li>
                            <li>・ストーリーズで日常を発信</li>
                            <li>・保存されるコンテンツを意識</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">X（Twitter）</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        X（Twitter）向けの占いツイートを作成してください。<br><br>
                        【テーマ】今週の運勢アップのヒント<br><br>
                        【条件】<br>
                        ・140文字以内<br>
                        ・思わずリツイートしたくなる内容<br>
                        ・最後に質問や呼びかけを入れる<br>
                        ・5パターン作成
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">ハッシュタグ戦略</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-purple-600">ハッシュタグ提案プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    Instagram投稿用のハッシュタグを提案してください。<br><br>
                    【投稿内容】タロット占いの鑑定募集<br>
                    【ターゲット】恋愛の悩みを持つ20-30代女性<br><br>
                    【条件】<br>
                    ・人気タグ（10万件以上）：5個<br>
                    ・中規模タグ（1万〜10万）：10個<br>
                    ・ニッチタグ（1万件以下）：5個<br>
                    ・合計20個程度
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">継続発信のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">投稿テンプレートを作る</h4>
                    <p class="text-sm text-gray-600">AIで基本形を作り、自分らしさを加えてテンプレート化。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">まとめて作成</h4>
                    <p class="text-sm text-gray-600">週末に1週間分の投稿をAIで作成し、予約投稿。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">自分の言葉で仕上げる</h4>
                    <p class="text-sm text-gray-600">AIの出力をベースに、自分らしい表現に修正。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">SNSは「継続」が命。AIを活用して毎日の発信を習慣化し、あなたのファンを増やしていきましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="preparation.php" class="flex items-center text-gray-600 hover:text-purple-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI活用の準備
        </a>
        <a href="blog-content.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
            次へ：ブログ・コンテンツ作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
