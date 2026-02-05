<?php
$page_title = 'SNSマーケティング - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'marketing';
$section_name = '第2部：集客・マーケティング';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">SNSマーケティング</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">Instagram、LINE、XなどのSNSを活用した集客方法をAIで効率化。医療広告ガイドラインに配慮しながら、効果的な発信方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">歯科医院に効果的なSNS</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📸</div>
                <h3 class="font-bold text-pink-500">Instagram</h3>
                <p class="text-sm text-gray-600">院内の雰囲気、スタッフ紹介、予防歯科の啓発に最適</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">💬</div>
                <h3 class="font-bold text-green-500">LINE公式</h3>
                <p class="text-sm text-gray-600">予約受付、リコール通知、患者とのコミュニケーションに必須</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">🐦</div>
                <h3 class="font-bold text-blue-400">X（Twitter）</h3>
                <p class="text-sm text-gray-600">歯科知識の発信、医院の最新情報の共有に有効</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">Instagram投稿文の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">投稿文作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院のInstagram投稿文を作成してください。<br><br>
                    【医院の特徴】<br>
                    ・〇〇市の歯科医院<br>
                    ・予防歯科に力を入れている<br>
                    ・痛みの少ない治療が特徴<br><br>
                    【投稿テーマ】<br>
                    フッ素塗布の重要性<br><br>
                    【条件】<br>
                    ・医療広告ガイドラインに配慮<br>
                    ・「最高」「絶対」など誇大表現は避ける<br>
                    ・親しみやすいトーン<br>
                    ・行動を促すCTAを含める<br>
                    ・ハッシュタグを10個提案
                </p>
            </div>
            <div class="bg-cyan-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm text-gray-700">
                    🦷 お子さんの歯を守る「フッ素塗布」<br><br>
                    フッ素には歯を強くする働きがあり、<br>
                    虫歯予防に効果的とされています✨<br><br>
                    ▶️ 歯の表面を強化<br>
                    ▶️ 虫歯菌の活動を抑制<br>
                    ▶️ 初期虫歯の修復をサポート<br><br>
                    定期的なフッ素塗布で、<br>
                    お子さんの大切な歯を守りませんか？<br><br>
                    お気軽にご相談ください😊
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">LINE公式アカウントの活用</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">あいさつメッセージの作成</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        歯科医院のLINE公式アカウント用あいさつメッセージを作成してください。<br><br>
                        【条件】<br>
                        ・友だち追加時に自動送信される<br>
                        ・医院の特徴を簡潔に伝える<br>
                        ・予約方法の案内を含める<br>
                        ・文字数：300文字程度<br>
                        ・安心感を与えるトーン
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">配信コンテンツのアイデア</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">定期配信</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>・お口の健康情報（月1回）</li>
                            <li>・季節の歯科ケア情報</li>
                            <li>・定期検診のリマインド</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">タイムリー配信</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>・休診日のお知らせ</li>
                            <li>・キャンセル枠の案内</li>
                            <li>・年末年始の診療案内</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">医療広告ガイドラインの注意点</h2>

        <div class="bg-yellow-50 p-6 rounded-lg">
            <h3 class="font-bold text-yellow-700 mb-4">SNS投稿で避けるべき表現</h3>
            <div class="space-y-3">
                <div class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span class="text-sm">「絶対に痛くない」「100%成功」などの断定表現</span>
                </div>
                <div class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span class="text-sm">「地域No.1」「最高の技術」などの比較優良広告</span>
                </div>
                <div class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span class="text-sm">ビフォーアフター写真（原則禁止）</span>
                </div>
                <div class="flex items-start">
                    <span class="text-red-500 mr-2">×</span>
                    <span class="text-sm">患者の体験談（効果を保証する形式）</span>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">SNSは「継続」が大切。AIで投稿作成の負担を減らし、週に1〜2回の投稿を目標に続けましょう。医療広告ガイドラインは必ず確認してください。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="preparation.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：導入準備
        </a>
        <a href="google-business.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：Googleビジネスプロフィール
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
