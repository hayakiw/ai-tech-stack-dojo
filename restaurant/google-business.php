<?php
$page_title = 'Googleビジネスプロフィール最適化 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：集客・マーケティング';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">Googleビジネスプロフィール最適化</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">「〇〇駅 ランチ」で検索した時に上位表示されるために。Googleビジネスプロフィール（旧Googleマイビジネス）の最適化方法をAIを使って効率的に行います。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">なぜGoogleビジネスプロフィールが重要か</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">🔍</div>
                <h3 class="font-bold mb-2">検索からの集客</h3>
                <p class="text-sm text-gray-600">「近くの〇〇」「〇〇駅 居酒屋」などの検索で表示され、新規顧客を獲得できます。</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">📍</div>
                <h3 class="font-bold mb-2">Googleマップ表示</h3>
                <p class="text-sm text-gray-600">地図検索で店舗が表示され、道案内からそのまま来店につながります。</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">⭐</div>
                <h3 class="font-bold mb-2">口コミの信頼性</h3>
                <p class="text-sm text-gray-600">Google口コミは多くの人が参考にするため、評価が集客に直結します。</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">💰</div>
                <h3 class="font-bold mb-2">無料で使える</h3>
                <p class="text-sm text-gray-600">登録・運用は完全無料。広告費をかけずに集客できます。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">プロフィール最適化のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">1. 基本情報を完璧に</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>店舗名（正式名称で統一）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>カテゴリ（メインカテゴリ＋サブカテゴリを設定）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>営業時間（祝日・特別営業日も設定）</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>電話番号・WebサイトURL</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2">✓</span>
                        <span>属性（Wi-Fi、駐車場、個室、テイクアウト対応など）</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">2. ビジネスの説明文</h3>
                <p class="text-sm text-gray-600 mb-4">750文字以内で、お店の特徴やこだわりを伝えます。AIで作成しましょう。</p>
                <div class="bg-gray-100 p-4 rounded">
                    <p class="text-sm font-mono">
                        【プロンプト】<br>
                        Googleビジネスプロフィール用の店舗説明文を作成してください。<br><br>
                        【店舗情報】<br>
                        ・店名：〇〇食堂<br>
                        ・業態：定食屋<br>
                        ・場所：〇〇駅徒歩3分<br>
                        ・特徴：<br>
                        　- 契約農家の有機野菜を使用<br>
                        　- 手作りにこだわった家庭料理<br>
                        　- ランチは日替わり定食が人気<br>
                        ・ターゲット：近隣のビジネスパーソン<br><br>
                        【条件】<br>
                        ・750文字以内<br>
                        ・「〇〇駅 定食」で検索されやすいキーワードを含める<br>
                        ・来店を促す文言を含める
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">3. 写真を充実させる</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-3 rounded">
                        <h5 class="font-bold text-sm mb-2">必須の写真</h5>
                        <ul class="text-xs text-gray-600 space-y-1">
                            <li>• 外観（看板が見える）</li>
                            <li>• 内観（雰囲気がわかる）</li>
                            <li>• 料理（人気メニュー3-5品）</li>
                            <li>• メニュー表</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <h5 class="font-bold text-sm mb-2">あると良い写真</h5>
                        <ul class="text-xs text-gray-600 space-y-1">
                            <li>• スタッフ（親しみやすさ）</li>
                            <li>• 調理風景</li>
                            <li>• 個室・席の様子</li>
                            <li>• 駐車場</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">投稿機能の活用</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-700 mb-4">Googleビジネスプロフィールには「投稿」機能があり、最新情報を発信できます。週1回以上の投稿が推奨されます。</p>

            <h4 class="font-bold mb-3">投稿のカテゴリ</h4>
            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div class="border p-3 rounded">
                    <span class="font-bold">最新情報</span>
                    <p class="text-xs text-gray-600">新メニュー、営業時間変更など</p>
                </div>
                <div class="border p-3 rounded">
                    <span class="font-bold">イベント</span>
                    <p class="text-xs text-gray-600">季節フェア、周年祭など</p>
                </div>
                <div class="border p-3 rounded">
                    <span class="font-bold">特典</span>
                    <p class="text-xs text-gray-600">クーポン、割引情報</p>
                </div>
                <div class="border p-3 rounded">
                    <span class="font-bold">商品</span>
                    <p class="text-xs text-gray-600">メニューの紹介</p>
                </div>
            </div>

            <div class="bg-gray-100 p-4 rounded">
                <p class="text-sm font-mono">
                    【投稿文作成プロンプト】<br>
                    Googleビジネスプロフィールの投稿文を作成してください。<br><br>
                    【投稿タイプ】特典<br>
                    【内容】平日ランチ限定 ドリンク1杯無料<br>
                    【期間】今月末まで<br>
                    【条件】150文字以内、来店を促すCTA
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">MEO対策の基本</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <p class="text-gray-700 mb-4">MEO（Map Engine Optimization）とは、Googleマップでの検索順位を上げる施策です。</p>

            <h4 class="font-bold mb-3">順位を上げるポイント</h4>
            <ol class="space-y-3">
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">1</span>
                    <div>
                        <span class="font-bold">情報の充実度</span>
                        <p class="text-sm text-gray-600">プロフィールを100%完成させる</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">2</span>
                    <div>
                        <span class="font-bold">口コミの数と評価</span>
                        <p class="text-sm text-gray-600">積極的に口コミを依頼、返信する</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">3</span>
                    <div>
                        <span class="font-bold">投稿の頻度</span>
                        <p class="text-sm text-gray-600">定期的な投稿でアクティブさをアピール</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">4</span>
                    <div>
                        <span class="font-bold">写真の追加</span>
                        <p class="text-sm text-gray-600">定期的に新しい写真を追加</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">Googleビジネスプロフィールは「育てる」ものです。一度設定して終わりではなく、定期的に投稿や写真を追加し、口コミに返信することで、検索順位が徐々に上がっていきます。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="sns-marketing.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：SNSマーケティング
        </a>
        <a href="review-analysis.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：レビュー分析
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
