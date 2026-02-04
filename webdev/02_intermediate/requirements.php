<?php
$page_title = '要件定義の方法 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$section_name = '第1部：アプリケーション設計';
$step_number = 1;
$total_steps = 24;
$extra_styles = '
        .code-block {
            background: #1e293b;
            color: #e2e8f0;
        }
';
include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">要件定義の方法</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">アプリ開発で最も重要なのは「何を作るか」を明確にすること。AIに開発を依頼する前に、要件を整理することで、期待通りの成果物が得られます。</p>
        </div>

        <!-- なぜ要件定義が重要か -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">なぜ要件定義が重要か</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-red-50 p-4 rounded-lg">
                    <h3 class="font-bold text-red-700 mb-2">要件定義なしで開発すると...</h3>
                    <ul class="text-sm space-y-2 text-red-600">
                        <li>&#10007; 作りながら「何が必要か」を考える</li>
                        <li>&#10007; 後から大幅な修正が発生</li>
                        <li>&#10007; AIへの指示が曖昧になる</li>
                        <li>&#10007; 完成形がブレる</li>
                    </ul>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-bold text-green-700 mb-2">要件定義してから開発すると...</h3>
                    <ul class="text-sm space-y-2 text-green-600">
                        <li>&#9675; ゴールが明確</li>
                        <li>&#9675; 必要な機能が整理されている</li>
                        <li>&#9675; AIへの指示が具体的になる</li>
                        <li>&#9675; 手戻りが少ない</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ユーザーストーリー -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">ユーザーストーリーを書く</h2>

            <p class="mb-4">ユーザーストーリーは「誰が」「何をしたいか」「なぜか」を簡潔に表現したものです。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">フォーマット</h3>
                <div class="bg-gray-100 p-4 rounded text-lg">
                    <strong>○○として</strong>、<strong>△△したい</strong>。なぜなら<strong>□□だから</strong>。
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">ブログアプリの例</h3>
                <div class="space-y-3">
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="text-blue-600 font-bold">ユーザーとして</span>、
                        <span class="text-green-600 font-bold">記事を投稿したい</span>。
                        なぜなら<span class="text-orange-600 font-bold">自分の考えを発信したいから</span>。
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="text-blue-600 font-bold">ユーザーとして</span>、
                        <span class="text-green-600 font-bold">自分の記事を編集・削除したい</span>。
                        なぜなら<span class="text-orange-600 font-bold">間違いを修正したいから</span>。
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="text-blue-600 font-bold">訪問者として</span>、
                        <span class="text-green-600 font-bold">記事の一覧を見たい</span>。
                        なぜなら<span class="text-orange-600 font-bold">興味のある記事を探したいから</span>。
                    </div>
                    <div class="p-3 bg-gray-50 rounded">
                        <span class="text-blue-600 font-bold">訪問者として</span>、
                        <span class="text-green-600 font-bold">記事の詳細を読みたい</span>。
                        なぜなら<span class="text-orange-600 font-bold">内容を理解したいから</span>。
                    </div>
                </div>
            </div>
        </section>

        <!-- 機能一覧 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">機能一覧を作る</h2>

            <p class="mb-4">ユーザーストーリーから、具体的な機能を洗い出します。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6 overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">機能</th>
                            <th class="p-3 text-left">説明</th>
                            <th class="p-3 text-left">優先度</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-3 font-bold">ユーザー登録</td>
                            <td class="p-3">メール・パスワードで新規登録</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">ログイン/ログアウト</td>
                            <td class="p-3">認証状態の管理</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">記事作成</td>
                            <td class="p-3">タイトル・本文を入力して投稿</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">記事編集</td>
                            <td class="p-3">自分の記事のみ編集可能</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">記事削除</td>
                            <td class="p-3">自分の記事のみ削除可能</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">記事一覧</td>
                            <td class="p-3">全記事を新しい順に表示</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">記事詳細</td>
                            <td class="p-3">記事の全文を表示</td>
                            <td class="p-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded">必須</span></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3 font-bold">画像アップロード</td>
                            <td class="p-3">記事に画像を添付</td>
                            <td class="p-3"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded">あれば</span></td>
                        </tr>
                        <tr>
                            <td class="p-3 font-bold">コメント機能</td>
                            <td class="p-3">記事にコメントを投稿</td>
                            <td class="p-3"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded">あれば</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>MVP（最小限の製品）を意識する：</strong>まずは「必須」の機能だけで動くものを作り、後から機能を追加していく方が効率的です。</p>
            </div>
        </section>

        <!-- AIに設計を相談 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AIに設計を相談する</h2>

            <p class="mb-4">要件が整理できたら、AIに設計を相談しましょう。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下の要件でブログアプリを設計してください。

【概要】
認証付きのブログアプリ。ユーザーは記事を投稿・編集・削除できる。

【技術スタック】
- フロントエンド: Next.js (TypeScript)
- バックエンド: FastAPI
- データベース: MySQL
- 認証: JWT
- 環境: Docker Compose

【機能一覧】
- ユーザー登録（メール・パスワード）
- ログイン/ログアウト
- 記事のCRUD（作成・読取・更新・削除）
- 記事一覧表示
- 記事詳細表示

【質問】
1. どのようなテーブル構成が良いですか？
2. APIエンドポイントはどう設計すべきですか？
3. フォルダ構成のおすすめを教えてください。</pre>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>ポイント：</strong>AIに「質問」を含めることで、対話的に設計を詰めていけます。一度に全部決めようとせず、段階的に進めましょう。</p>
            </div>
        </section>

        <!-- 画面一覧 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">画面一覧を作る</h2>

            <p class="mb-4">どんな画面が必要かをリストアップします。</p>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">公開ページ（認証不要）</h4>
                        <ul class="text-sm space-y-1">
                            <li>/ - トップページ（記事一覧）</li>
                            <li>/posts/[id] - 記事詳細</li>
                            <li>/login - ログイン</li>
                            <li>/register - 新規登録</li>
                        </ul>
                    </div>
                    <div class="p-4 bg-gray-50 rounded">
                        <h4 class="font-bold mb-2">会員ページ（認証必要）</h4>
                        <ul class="text-sm space-y-1">
                            <li>/posts/new - 記事作成</li>
                            <li>/posts/[id]/edit - 記事編集</li>
                            <li>/mypage - マイページ（自分の記事一覧）</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">まとめ</h2>
            <div class="bg-blue-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>ユーザーストーリーで「誰が何をしたいか」を明確にする</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>機能一覧で必要な機能を洗い出し、優先度をつける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>MVP（最小限の機能）から始める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>AIに設計を相談して、具体的な構成を決める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>画面一覧で必要なページを整理する</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                トップページ
            </a>
            <a href="component-design.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：コンポーネント設計
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
