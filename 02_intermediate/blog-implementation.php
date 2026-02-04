<?php
$page_title = 'ブログアプリ実装編 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'practice';
$extra_styles = '.code-block {\n            background: #1e293b;\n            color: #e2e8f0;\n        }';
$section_name = '第8部：実践プロジェクト';
$step_number = 23;
$total_steps = 24;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ブログアプリ実装編</h1>

        <!-- イントロ -->
        <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
            <p class="text-lg">設計に基づいて、AIと一緒に実装していきましょう。ステップバイステップで進めます。</p>
        </div>

        <!-- Step 1: Docker環境 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 1: Docker環境のセットアップ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>ブログアプリ用のDocker Compose環境を作成してください。

構成：
- MySQL 8.0
- FastAPI（Python 3.11）
- Next.js 14

要件：
- 開発時のホットリロード対応
- MySQLデータの永続化
- 環境変数は.envファイルで管理</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">生成されるファイル</h3>
                <ul class="text-sm space-y-2">
                    <li>✓ compose.yaml</li>
                    <li>✓ backend/Dockerfile</li>
                    <li>✓ frontend/Dockerfile</li>
                    <li>✓ .env</li>
                </ul>
                <div class="code-block p-3 rounded font-mono text-xs mt-4">
                    docker compose up -d
                </div>
            </div>
        </section>

        <!-- Step 2: バックエンド基盤 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 2: バックエンド基盤</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>FastAPIのバックエンド基盤を作成してください。

ファイル：
1. main.py - FastAPIアプリのエントリポイント
2. config.py - pydantic-settingsで環境変数管理
3. database.py - SQLAlchemy接続設定
4. models.py - User, Postモデル
5. schemas.py - Pydanticスキーマ

MySQL接続URL: mysql+pymysql://user:password@db:3306/blog</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">確認ポイント</h3>
                <ul class="text-sm space-y-2">
                    <li>□ MySQLに接続できるか</li>
                    <li>□ モデルが正しく定義されているか</li>
                    <li>□ http://localhost:8000/docs でSwagger UIが表示されるか</li>
                </ul>
            </div>
        </section>

        <!-- Step 3: 認証API -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 3: 認証API実装</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>JWT認証機能を実装してください。

ファイル：
1. auth.py - パスワードハッシュ、JWT生成・検証、get_current_user
2. routers/auth.py - /auth/register, /auth/login, /auth/me

要件：
- bcryptでパスワードハッシュ
- JWTトークンの有効期限は30分
- SECRET_KEYは環境変数から取得</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">テスト</h3>
                <div class="code-block p-3 rounded font-mono text-xs overflow-x-auto">
<pre># Swagger UI (http://localhost:8000/docs) で以下をテスト
1. POST /auth/register でユーザー登録
2. POST /auth/login でトークン取得
3. GET /auth/me で自分の情報取得（Authorize ボタンでトークン設定）</pre>
                </div>
            </div>
        </section>

        <!-- Step 4: 記事API -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 4: 記事API実装</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-purple-600">AIへの指示</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>記事のCRUD APIを実装してください。

ファイル：
- routers/posts.py

エンドポイント：
- GET /posts - 記事一覧（ページネーション付き）
- GET /posts/{id} - 記事詳細
- POST /posts - 記事作成（認証必要）
- PUT /posts/{id} - 記事更新（本人のみ）
- DELETE /posts/{id} - 記事削除（本人のみ）

要件：
- 一覧は新しい順にソート
- 詳細では著者情報も返す
- 本人以外の更新・削除は403エラー</pre>
                </div>
            </div>
        </section>

        <!-- Step 5: フロントエンド -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Step 5: フロントエンド実装</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-purple-600">AIへの指示（認証）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>Next.jsのフロントエンドで認証機能を実装してください。

ファイル：
1. contexts/AuthContext.tsx - 認証状態管理
2. app/login/page.tsx - ログインページ
3. app/register/page.tsx - 新規登録ページ
4. components/Header.tsx - ナビゲーション（認証状態で表示切替）
5. components/RequireAuth.tsx - 認証必須ラッパー

要件：
- トークンはlocalStorageに保存
- ログイン状態はContext APIで管理
- ログアウト後はトップページにリダイレクト</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4 text-purple-600">AIへの指示（記事表示）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>記事の表示機能を実装してください。

ファイル：
1. app/page.tsx - トップページ（記事一覧）
2. app/posts/[id]/page.tsx - 記事詳細
3. components/ArticleCard.tsx - 記事カード
4. components/ArticleList.tsx - 記事一覧

要件：
- サーバーコンポーネントでデータ取得
- 記事カードにはタイトル、著者、日付を表示
- 詳細ページでは本人なら編集・削除ボタンを表示</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4 text-purple-600">AIへの指示（記事編集）</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>記事の作成・編集機能を実装してください。

ファイル：
1. app/posts/new/page.tsx - 記事作成ページ
2. app/posts/[id]/edit/page.tsx - 記事編集ページ
3. components/PostForm.tsx - 記事フォーム（作成・編集共通）

要件：
- 認証必須
- バリデーション（タイトル必須、本文10文字以上）
- 送信後は記事詳細にリダイレクト
- 削除は確認ダイアログを表示</pre>
                </div>
            </div>
        </section>

        <!-- デバッグのコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">デバッグのコツ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div>
                        <h3 class="font-bold text-red-600">エラーが出たら</h3>
                        <p class="text-sm text-gray-600">エラーメッセージをそのままAIに貼り付けて質問</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-blue-600">動作確認</h3>
                        <p class="text-sm text-gray-600">Swagger UI（バックエンド）、ブラウザのDevTools（フロント）を活用</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-green-600">ログ確認</h3>
                        <div class="code-block p-2 rounded font-mono text-xs mt-2">
                            docker compose logs -f backend
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="blog-design.php" class="flex items-center text-gray-600 hover:text-indigo-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                設計編
            </a>
            <a href="blog-finishing.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
                次へ：仕上げ編
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
