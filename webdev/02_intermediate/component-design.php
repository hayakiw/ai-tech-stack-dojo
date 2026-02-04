<?php
$page_title = 'コンポーネント設計 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$section_name = '第1部：アプリケーション設計';
$step_number = 2;
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
        <h1 class="text-4xl font-bold mb-8">コンポーネント設計</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">Reactアプリはコンポーネントの組み合わせで構成されます。再利用可能な部品として設計することで、保守性が高く効率的な開発ができます。</p>
        </div>

        <!-- コンポーネントとは -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">コンポーネント設計の考え方</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">コンポーネント分割の基準</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="p-4 bg-green-50 rounded">
                        <h4 class="font-bold text-green-700 mb-2">1. 再利用性</h4>
                        <p class="text-sm">複数の場所で使う部品はコンポーネント化</p>
                        <p class="text-xs text-gray-500 mt-2">例: ボタン、カード、フォーム入力</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded">
                        <h4 class="font-bold text-blue-700 mb-2">2. 単一責任</h4>
                        <p class="text-sm">1つのコンポーネントは1つの役割</p>
                        <p class="text-xs text-gray-500 mt-2">例: Header、ArticleCard、LoginForm</p>
                    </div>
                    <div class="p-4 bg-purple-50 rounded">
                        <h4 class="font-bold text-purple-700 mb-2">3. 適切な粒度</h4>
                        <p class="text-sm">大きすぎず、小さすぎず</p>
                        <p class="text-xs text-gray-500 mt-2">例: Buttonは良い、ButtonTextは細かすぎ</p>
                    </div>
                    <div class="p-4 bg-orange-50 rounded">
                        <h4 class="font-bold text-orange-700 mb-2">4. テスト容易性</h4>
                        <p class="text-sm">独立してテストできる単位</p>
                        <p class="text-xs text-gray-500 mt-2">例: ArticleListはArticleCardを使う</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- フォルダ構成 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">フォルダ構成</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3">Next.js推奨構成</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>src/
├── app/                    # Next.js App Router
│   ├── layout.tsx          # 共通レイアウト
│   ├── page.tsx            # トップページ
│   ├── login/
│   │   └── page.tsx
│   ├── register/
│   │   └── page.tsx
│   └── posts/
│       ├── page.tsx        # 記事一覧
│       ├── new/
│       │   └── page.tsx    # 記事作成
│       └── [id]/
│           ├── page.tsx    # 記事詳細
│           └── edit/
│               └── page.tsx
├── components/             # 再利用コンポーネント
│   ├── ui/                 # 汎用UI
│   │   ├── Button.tsx
│   │   ├── Input.tsx
│   │   └── Card.tsx
│   ├── layout/             # レイアウト系
│   │   ├── Header.tsx
│   │   └── Footer.tsx
│   └── features/           # 機能別
│       ├── auth/
│       │   ├── LoginForm.tsx
│       │   └── RegisterForm.tsx
│       └── posts/
│           ├── ArticleCard.tsx
│           ├── ArticleList.tsx
│           └── ArticleForm.tsx
├── hooks/                  # カスタムフック
│   ├── useAuth.ts
│   └── usePosts.ts
├── lib/                    # ユーティリティ
│   └── api.ts
└── types/                  # 型定義
    └── index.ts</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>ポイント：</strong>components/の下は「用途別」に分けることで、どこに何があるか分かりやすくなります。</p>
            </div>
        </section>

        <!-- コンポーネント設計例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">ブログアプリのコンポーネント設計</h2>

            <div class="space-y-6">
                <!-- UI コンポーネント -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-blue-600">汎用UIコンポーネント</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="p-4 bg-gray-50 rounded">
                            <h4 class="font-bold text-sm mb-2">Button</h4>
                            <p class="text-xs text-gray-600 mb-2">Props: variant, size, onClick, disabled, children</p>
                            <div class="flex gap-2">
                                <span class="bg-blue-500 text-white text-xs px-3 py-1 rounded">Primary</span>
                                <span class="bg-gray-500 text-white text-xs px-3 py-1 rounded">Secondary</span>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-50 rounded">
                            <h4 class="font-bold text-sm mb-2">Input</h4>
                            <p class="text-xs text-gray-600 mb-2">Props: type, placeholder, value, onChange, error</p>
                            <input type="text" class="w-full text-xs border rounded px-2 py-1" placeholder="例: メールアドレス" disabled>
                        </div>
                        <div class="p-4 bg-gray-50 rounded">
                            <h4 class="font-bold text-sm mb-2">Card</h4>
                            <p class="text-xs text-gray-600 mb-2">Props: children, className</p>
                            <div class="bg-white border rounded p-2 text-xs">カードコンテンツ</div>
                        </div>
                    </div>
                </div>

                <!-- 機能コンポーネント -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-green-600">機能コンポーネント</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-3 text-left">コンポーネント</th>
                                    <th class="p-3 text-left">役割</th>
                                    <th class="p-3 text-left">主なProps</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-3 font-bold">Header</td>
                                    <td class="p-3">ナビゲーション、ログイン状態表示</td>
                                    <td class="p-3 font-mono text-xs">user, onLogout</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-bold">LoginForm</td>
                                    <td class="p-3">ログインフォーム</td>
                                    <td class="p-3 font-mono text-xs">onSubmit, isLoading</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-bold">RegisterForm</td>
                                    <td class="p-3">新規登録フォーム</td>
                                    <td class="p-3 font-mono text-xs">onSubmit, isLoading</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-bold">ArticleCard</td>
                                    <td class="p-3">記事のカード表示</td>
                                    <td class="p-3 font-mono text-xs">article</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-bold">ArticleList</td>
                                    <td class="p-3">記事一覧表示</td>
                                    <td class="p-3 font-mono text-xs">articles</td>
                                </tr>
                                <tr>
                                    <td class="p-3 font-bold">ArticleForm</td>
                                    <td class="p-3">記事作成・編集フォーム</td>
                                    <td class="p-3 font-mono text-xs">article?, onSubmit, isLoading</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- コード例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">コード例</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">Button.tsx</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>type ButtonProps = {
  variant?: 'primary' | 'secondary' | 'danger';
  size?: 'sm' | 'md' | 'lg';
  disabled?: boolean;
  onClick?: () => void;
  children: React.ReactNode;
};

export function Button({
  variant = 'primary',
  size = 'md',
  disabled = false,
  onClick,
  children
}: ButtonProps) {
  const baseStyle = 'rounded font-bold transition';

  const variants = {
    primary: 'bg-blue-600 text-white hover:bg-blue-700',
    secondary: 'bg-gray-200 text-gray-800 hover:bg-gray-300',
    danger: 'bg-red-600 text-white hover:bg-red-700',
  };

  const sizes = {
    sm: 'px-3 py-1 text-sm',
    md: 'px-4 py-2',
    lg: 'px-6 py-3 text-lg',
  };

  return (
    &lt;button
      className={`${baseStyle} ${variants[variant]} ${sizes[size]}`}
      disabled={disabled}
      onClick={onClick}
    &gt;
      {children}
    &lt;/button&gt;
  );
}</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3">ArticleCard.tsx</h3>
                    <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import Link from 'next/link';
import { Article } from '@/types';

type ArticleCardProps = {
  article: Article;
};

export function ArticleCard({ article }: ArticleCardProps) {
  return (
    &lt;Link href={`/posts/${article.id}`}&gt;
      &lt;div className="bg-white rounded-lg shadow p-6 hover:shadow-md transition"&gt;
        &lt;h2 className="text-xl font-bold mb-2"&gt;{article.title}&lt;/h2&gt;
        &lt;p className="text-gray-600 text-sm mb-4 line-clamp-2"&gt;
          {article.content}
        &lt;/p&gt;
        &lt;div className="flex justify-between text-xs text-gray-400"&gt;
          &lt;span&gt;{article.author.name}&lt;/span&gt;
          &lt;span&gt;{new Date(article.createdAt).toLocaleDateString()}&lt;/span&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/Link&gt;
  );
}</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- AIに相談 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AIにコンポーネント設計を相談</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-3 text-purple-600">AIへの指示例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>ブログアプリのコンポーネント設計を手伝ってください。

【アプリ概要】
- 認証付きブログアプリ
- 記事のCRUD、ユーザー登録・ログイン

【設計してほしいコンポーネント】
1. 汎用UIコンポーネント（Button, Input, Card, Modal）
2. 機能コンポーネント（Header, LoginForm, ArticleCard等）

【要望】
- TypeScriptで型定義も含めて
- Tailwind CSSを使用
- 再利用しやすい設計で</pre>
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
                        <span>コンポーネントは「再利用性」「単一責任」を意識して設計</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>フォルダ構成は「用途別」に整理する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>汎用UI（Button, Input等）と機能コンポーネントを分ける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>Propsの型定義で使い方を明確にする</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="requirements.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                要件定義の方法
            </a>
            <a href="api-design.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：API設計
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
