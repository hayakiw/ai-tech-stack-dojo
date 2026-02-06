<?php
$page_title = 'ブログアプリ設計編 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block {
            background: #1e293b;
            color: #e2e8f0;
        }';
$section_name = '第8部：実践プロジェクト';
$step_number = 22;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ブログアプリ設計編</h1>

        <!-- イントロ -->
        <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
            <p class="text-lg">中級編の集大成として、認証付きブログアプリを作成します。まずは設計からスタート！</p>
        </div>

        <!-- Claude Codeでプロジェクトを始める -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Claude Codeでプロジェクトを始める</h2>

            <p class="mb-4">まずはプロジェクト用のフォルダを作成し、Claude Codeを起動しましょう。</p>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-r-lg mb-6">
                <h3 class="font-bold text-indigo-700 mb-3">Claude Codeへの指示</h3>
                <p class="text-sm text-gray-700 mb-3">ターミナルで以下のコマンドを実行して、プロジェクトフォルダを作成し、Claude Codeを起動します。</p>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># プロジェクトフォルダを作成</span>
mkdir blog-app
cd blog-app

<span class="text-green-400"># Claude Codeを起動</span>
claude</pre>
                </div>
            </div>

            <p class="text-sm text-gray-600">Claude Codeが起動したら、プロジェクトの設計について対話的に相談できます。以下のセクションで紹介するプロンプトを使って、設計を進めていきましょう。</p>
        </section>

        <!-- プロジェクト概要 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">プロジェクト概要</h2>

            <div class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white p-6 rounded-lg mb-6">
                <h3 class="text-xl font-bold mb-4">認証付きブログアプリ</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p class="font-bold mb-2">機能</p>
                        <ul class="text-sm space-y-1 opacity-90">
                            <li>・ユーザー登録・ログイン</li>
                            <li>・記事の作成・編集・削除</li>
                            <li>・記事一覧・詳細表示</li>
                            <li>・自分の記事のみ編集可能</li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-bold mb-2">技術スタック</p>
                        <ul class="text-sm space-y-1 opacity-90">
                            <li>・Docker + Docker Compose</li>
                            <li>・MySQL + SQLAlchemy</li>
                            <li>・FastAPI + JWT認証</li>
                            <li>・Next.js + Tailwind CSS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- プロジェクト構成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">プロジェクト構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>blog-app/
├── compose.yaml
├── .env
├── backend/
│   ├── Dockerfile
│   ├── requirements.txt
│   ├── main.py
│   ├── config.py
│   ├── database.py
│   ├── models.py
│   ├── schemas.py
│   ├── auth.py
│   ├── routers/
│   │   ├── auth.py
│   │   └── posts.py
│   └── alembic/
└── frontend/
    ├── Dockerfile
    ├── package.json
    ├── .env.local
    ├── src/
    │   ├── app/
    │   │   ├── layout.tsx
    │   │   ├── page.tsx
    │   │   ├── login/
    │   │   ├── register/
    │   │   └── posts/
    │   ├── components/
    │   ├── contexts/
    │   ├── hooks/
    │   └── lib/
    └── tailwind.config.js</pre>
                </div>
            </div>
        </section>

        <!-- AIに設計を依頼 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">AIに設計を依頼</h2>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-r-lg mb-6">
                <h3 class="font-bold text-indigo-700 mb-4">Claude Codeへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>認証付きブログアプリを作成したいです。

【技術スタック】
- フロントエンド: Next.js 14 (App Router), TypeScript, Tailwind CSS
- バックエンド: FastAPI, SQLAlchemy
- データベース: MySQL 8.0
- 認証: JWT
- 環境: Docker Compose

【機能要件】
- ユーザー登録（メール、パスワード、名前）
- ログイン/ログアウト
- 記事のCRUD（作成・読取・更新・削除）
- 記事一覧表示（新しい順、ページネーション）
- 記事詳細表示
- 自分の記事のみ編集・削除可能

【質問】
1. データベースのテーブル設計を教えてください
2. APIエンドポイントの一覧を教えてください
3. フロントエンドのページ構成を教えてください
4. compose.yamlの設定を教えてください</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-indigo-600">Claude Codeが行うこと</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="w-5 h-5 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mr-3 mt-0.5 text-xs font-bold flex-shrink-0">1</span>
                        <span>要件を分析し、最適なデータベーススキーマを提案します</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-5 h-5 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mr-3 mt-0.5 text-xs font-bold flex-shrink-0">2</span>
                        <span>RESTful APIのエンドポイント設計を一覧で出力します</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-5 h-5 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mr-3 mt-0.5 text-xs font-bold flex-shrink-0">3</span>
                        <span>フロントエンドのページ構成とルーティングを設計します</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-5 h-5 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center mr-3 mt-0.5 text-xs font-bold flex-shrink-0">4</span>
                        <span>Docker Composeの構成を含む、プロジェクト全体の構造を提案します</span>
                    </li>
                </ul>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                <p class="text-sm text-gray-700">Claude Codeが提案した設計を以下に示します。あなたのプロジェクトでも同様の設計になるはずです。</p>
            </div>
        </section>

        <!-- DB設計 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">データベース設計</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-blue-600">users テーブル</h3>
                    <ul class="text-sm space-y-1">
                        <li><code>id</code> - INT, PK</li>
                        <li><code>email</code> - VARCHAR(255), UNIQUE</li>
                        <li><code>name</code> - VARCHAR(100)</li>
                        <li><code>password_hash</code> - VARCHAR(255)</li>
                        <li><code>created_at</code> - DATETIME</li>
                        <li><code>updated_at</code> - DATETIME</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-green-600">posts テーブル</h3>
                    <ul class="text-sm space-y-1">
                        <li><code>id</code> - INT, PK</li>
                        <li><code>title</code> - VARCHAR(255)</li>
                        <li><code>content</code> - TEXT</li>
                        <li><code>author_id</code> - INT, FK → users.id</li>
                        <li><code>created_at</code> - DATETIME</li>
                        <li><code>updated_at</code> - DATETIME</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- API設計 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">API設計</h2>

            <div class="bg-white p-6 rounded-lg shadow overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-indigo-50">
                        <tr>
                            <th class="p-3 text-left">メソッド</th>
                            <th class="p-3 text-left">エンドポイント</th>
                            <th class="p-3 text-left">説明</th>
                            <th class="p-3 text-left">認証</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b bg-purple-50">
                            <td class="p-3" colspan="4"><strong>認証</strong></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">POST</td>
                            <td class="p-3 font-mono text-xs">/auth/register</td>
                            <td class="p-3">ユーザー登録</td>
                            <td class="p-3">-</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">POST</td>
                            <td class="p-3 font-mono text-xs">/auth/login</td>
                            <td class="p-3">ログイン</td>
                            <td class="p-3">-</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">GET</td>
                            <td class="p-3 font-mono text-xs">/auth/me</td>
                            <td class="p-3">自分の情報</td>
                            <td class="p-3">必要</td>
                        </tr>
                        <tr class="border-b bg-blue-50">
                            <td class="p-3" colspan="4"><strong>記事</strong></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">GET</td>
                            <td class="p-3 font-mono text-xs">/posts</td>
                            <td class="p-3">記事一覧</td>
                            <td class="p-3">-</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">GET</td>
                            <td class="p-3 font-mono text-xs">/posts/:id</td>
                            <td class="p-3">記事詳細</td>
                            <td class="p-3">-</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">POST</td>
                            <td class="p-3 font-mono text-xs">/posts</td>
                            <td class="p-3">記事作成</td>
                            <td class="p-3">必要</td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-3">PUT</td>
                            <td class="p-3 font-mono text-xs">/posts/:id</td>
                            <td class="p-3">記事更新</td>
                            <td class="p-3">必要（本人）</td>
                        </tr>
                        <tr>
                            <td class="p-3">DELETE</td>
                            <td class="p-3 font-mono text-xs">/posts/:id</td>
                            <td class="p-3">記事削除</td>
                            <td class="p-3">必要（本人）</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Claude Codeに設計ドキュメントを作成させる -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Claude Codeに設計ドキュメントを作成させる</h2>

            <p class="mb-4">設計内容が固まったら、Claude Codeに設計ドキュメントを生成してもらいましょう。実装中のリファレンスとして役立ちます。</p>

            <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 rounded-r-lg mb-6">
                <h3 class="font-bold text-indigo-700 mb-3">Claude Codeへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre><span class="text-green-400"># Claude Codeに以下のように依頼します</span>
今までの設計内容をもとに、DESIGN.md ファイルを作成してください。
以下の内容を含めてください：

1. プロジェクト概要と技術スタック
2. データベーススキーマ（usersテーブル、postsテーブル）
3. APIエンドポイント一覧（メソッド、パス、説明、認証要否）
4. フロントエンドのページ構成とルーティング
5. Docker Composeのサービス構成</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3 text-indigo-600">設計ドキュメントのメリット</h3>
                <ul class="text-sm space-y-2">
                    <li class="flex items-start">
                        <span class="text-indigo-500 mr-2 mt-1">&#9632;</span>
                        <span>実装中にAPIのパスやテーブル構造をすぐに確認できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-500 mr-2 mt-1">&#9632;</span>
                        <span>Claude Codeが DESIGN.md を参照して、設計に沿ったコードを生成してくれる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-500 mr-2 mt-1">&#9632;</span>
                        <span>チーム開発時に設計意図を共有するドキュメントとして活用できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- 画面設計 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">画面設計</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-bold mb-3">公開ページ</h3>
                        <ul class="text-sm space-y-2">
                            <li><code>/</code> - 記事一覧（トップ）</li>
                            <li><code>/posts/[id]</code> - 記事詳細</li>
                            <li><code>/login</code> - ログイン</li>
                            <li><code>/register</code> - 新規登録</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3">認証必要ページ</h3>
                        <ul class="text-sm space-y-2">
                            <li><code>/posts/new</code> - 記事作成</li>
                            <li><code>/posts/[id]/edit</code> - 記事編集</li>
                            <li><code>/mypage</code> - マイページ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 次のステップ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">次のステップ</h2>

            <div class="bg-indigo-50 p-6 rounded-lg">
                <p class="mb-4">設計が完了したら、次は実装編に進みましょう。</p>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-indigo-200 rounded-full flex items-center justify-center mr-3 text-sm">1</span>
                        <span>Docker環境のセットアップ</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-indigo-200 rounded-full flex items-center justify-center mr-3 text-sm">2</span>
                        <span>バックエンドAPI実装</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-indigo-200 rounded-full flex items-center justify-center mr-3 text-sm">3</span>
                        <span>フロントエンド実装</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-6 h-6 bg-indigo-200 rounded-full flex items-center justify-center mr-3 text-sm">4</span>
                        <span>テストとデバッグ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="deployment.php" class="flex items-center text-gray-600 hover:text-indigo-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                デプロイ実践
            </a>
            <a href="blog-implementation.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                次へ：実装編
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>


<?php include 'includes/footer.php'; ?>
