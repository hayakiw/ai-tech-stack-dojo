<?php
$page_title = 'データベース設計 - AI×Web開発 中級編 | AI Tech Stack';
$current_page = 'design';
$section_name = '第1部：アプリケーション設計';
$step_number = 4;
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
        <h1 class="text-4xl font-bold mb-8">データベース設計</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">データベース設計はアプリの土台。適切なテーブル構造とリレーションを設計することで、効率的なデータ管理ができます。</p>
        </div>

        <!-- 設計の基本 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">データベース設計の基本概念</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-blue-600">テーブル（Table）</h3>
                    <p class="text-sm mb-3">データを格納する表。行（レコード）と列（カラム）で構成。</p>
                    <div class="bg-gray-50 p-3 rounded text-xs">
                        <p class="font-bold mb-2">users テーブル</p>
                        <table class="w-full">
                            <tr class="border-b"><td class="p-1">id</td><td class="p-1">name</td><td class="p-1">email</td></tr>
                            <tr><td class="p-1">1</td><td class="p-1">山田</td><td class="p-1">yamada@...</td></tr>
                        </table>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-green-600">リレーション（Relation）</h3>
                    <p class="text-sm mb-3">テーブル間の関連。外部キー（FK）で参照。</p>
                    <div class="bg-gray-50 p-3 rounded text-xs">
                        <p>posts.author_id -> users.id</p>
                        <p class="mt-2 text-gray-500">「記事は1人のユーザーに属する」</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-4">主なリレーションの種類</h3>
                <div class="space-y-4">
                    <div class="p-4 bg-blue-50 rounded">
                        <h4 class="font-bold text-blue-700">1対多（One-to-Many）</h4>
                        <p class="text-sm">1人のユーザーが複数の記事を持つ</p>
                        <p class="text-xs text-gray-500 mt-1">User(1) -> Post(多)</p>
                    </div>
                    <div class="p-4 bg-green-50 rounded">
                        <h4 class="font-bold text-green-700">多対多（Many-to-Many）</h4>
                        <p class="text-sm">記事は複数のタグを持ち、タグは複数の記事に付く</p>
                        <p class="text-xs text-gray-500 mt-1">Post(多) <-> Tag(多) 中間テーブルが必要</p>
                    </div>
                    <div class="p-4 bg-purple-50 rounded">
                        <h4 class="font-bold text-purple-700">1対1（One-to-One）</h4>
                        <p class="text-sm">ユーザーは1つのプロフィールを持つ</p>
                        <p class="text-xs text-gray-500 mt-1">User(1) <-> Profile(1)</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ブログアプリのテーブル設計 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">ブログアプリのテーブル設計</h2>

            <div class="space-y-6">
                <!-- ER図 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4">ER図（エンティティ関連図）</h3>
                    <div class="bg-gray-100 p-6 rounded text-center">
                        <div class="flex justify-center items-center gap-8 flex-wrap">
                            <div class="bg-blue-100 p-4 rounded-lg">
                                <p class="font-bold text-blue-700">users</p>
                                <p class="text-xs mt-2">id, email, name, password</p>
                            </div>
                            <div class="text-2xl">-> 1:N -></div>
                            <div class="bg-green-100 p-4 rounded-lg">
                                <p class="font-bold text-green-700">posts</p>
                                <p class="text-xs mt-2">id, title, content, author_id</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- users テーブル -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-blue-600">users テーブル</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-blue-50">
                                <tr>
                                    <th class="p-3 text-left">カラム名</th>
                                    <th class="p-3 text-left">型</th>
                                    <th class="p-3 text-left">制約</th>
                                    <th class="p-3 text-left">説明</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">id</td>
                                    <td class="p-3">INT</td>
                                    <td class="p-3"><span class="bg-yellow-100 px-2 py-1 rounded text-xs">PK, AUTO_INCREMENT</span></td>
                                    <td class="p-3">主キー</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">email</td>
                                    <td class="p-3">VARCHAR(255)</td>
                                    <td class="p-3"><span class="bg-green-100 px-2 py-1 rounded text-xs">UNIQUE, NOT NULL</span></td>
                                    <td class="p-3">メールアドレス</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">name</td>
                                    <td class="p-3">VARCHAR(100)</td>
                                    <td class="p-3"><span class="bg-green-100 px-2 py-1 rounded text-xs">NOT NULL</span></td>
                                    <td class="p-3">表示名</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">password_hash</td>
                                    <td class="p-3">VARCHAR(255)</td>
                                    <td class="p-3"><span class="bg-green-100 px-2 py-1 rounded text-xs">NOT NULL</span></td>
                                    <td class="p-3">ハッシュ化パスワード</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">created_at</td>
                                    <td class="p-3">DATETIME</td>
                                    <td class="p-3"><span class="bg-gray-100 px-2 py-1 rounded text-xs">DEFAULT NOW()</span></td>
                                    <td class="p-3">作成日時</td>
                                </tr>
                                <tr>
                                    <td class="p-3 font-mono">updated_at</td>
                                    <td class="p-3">DATETIME</td>
                                    <td class="p-3"><span class="bg-gray-100 px-2 py-1 rounded text-xs">ON UPDATE NOW()</span></td>
                                    <td class="p-3">更新日時</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- posts テーブル -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4 text-green-600">posts テーブル</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-green-50">
                                <tr>
                                    <th class="p-3 text-left">カラム名</th>
                                    <th class="p-3 text-left">型</th>
                                    <th class="p-3 text-left">制約</th>
                                    <th class="p-3 text-left">説明</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">id</td>
                                    <td class="p-3">INT</td>
                                    <td class="p-3"><span class="bg-yellow-100 px-2 py-1 rounded text-xs">PK, AUTO_INCREMENT</span></td>
                                    <td class="p-3">主キー</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">title</td>
                                    <td class="p-3">VARCHAR(255)</td>
                                    <td class="p-3"><span class="bg-green-100 px-2 py-1 rounded text-xs">NOT NULL</span></td>
                                    <td class="p-3">記事タイトル</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">content</td>
                                    <td class="p-3">TEXT</td>
                                    <td class="p-3"><span class="bg-green-100 px-2 py-1 rounded text-xs">NOT NULL</span></td>
                                    <td class="p-3">記事本文</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">author_id</td>
                                    <td class="p-3">INT</td>
                                    <td class="p-3"><span class="bg-purple-100 px-2 py-1 rounded text-xs">FK -> users.id</span></td>
                                    <td class="p-3">著者ID</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-mono">created_at</td>
                                    <td class="p-3">DATETIME</td>
                                    <td class="p-3"><span class="bg-gray-100 px-2 py-1 rounded text-xs">DEFAULT NOW()</span></td>
                                    <td class="p-3">作成日時</td>
                                </tr>
                                <tr>
                                    <td class="p-3 font-mono">updated_at</td>
                                    <td class="p-3">DATETIME</td>
                                    <td class="p-3"><span class="bg-gray-100 px-2 py-1 rounded text-xs">ON UPDATE NOW()</span></td>
                                    <td class="p-3">更新日時</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- SQL例 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">MySQL でのテーブル作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>-- usersテーブル
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    name VARCHAR(100) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- postsテーブル
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author_id INT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE CASCADE
);

-- インデックス（検索高速化）
CREATE INDEX idx_posts_author_id ON posts(author_id);
CREATE INDEX idx_posts_created_at ON posts(created_at DESC);</pre>
                </div>
            </div>
        </section>

        <!-- SQLAlchemy モデル -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">SQLAlchemy モデル（Python）</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from sqlalchemy import Column, Integer, String, Text, DateTime, ForeignKey
from sqlalchemy.orm import relationship
from sqlalchemy.sql import func
from database import Base

class User(Base):
    __tablename__ = "users"

    id = Column(Integer, primary_key=True, index=True)
    email = Column(String(255), unique=True, nullable=False, index=True)
    name = Column(String(100), nullable=False)
    password_hash = Column(String(255), nullable=False)
    created_at = Column(DateTime, server_default=func.now())
    updated_at = Column(DateTime, server_default=func.now(), onupdate=func.now())

    # リレーション
    posts = relationship("Post", back_populates="author")


class Post(Base):
    __tablename__ = "posts"

    id = Column(Integer, primary_key=True, index=True)
    title = Column(String(255), nullable=False)
    content = Column(Text, nullable=False)
    author_id = Column(Integer, ForeignKey("users.id"), nullable=False)
    created_at = Column(DateTime, server_default=func.now())
    updated_at = Column(DateTime, server_default=func.now(), onupdate=func.now())

    # リレーション
    author = relationship("User", back_populates="posts")</pre>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mt-6">
                <p><strong>ポイント：</strong>SQLAlchemyの<code>relationship</code>を使うと、<code>post.author</code>のようにオブジェクト経由でリレーション先にアクセスできます。</p>
            </div>
        </section>

        <!-- 設計のコツ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">設計のコツ</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-green-600">良い設計</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">&#9675;</span>
                            <span>適切な正規化（データの重複を避ける）</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">&#9675;</span>
                            <span>明確な命名（users, posts）</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">&#9675;</span>
                            <span>created_at, updated_atを必ず含める</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">&#9675;</span>
                            <span>適切なインデックス設定</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-3 text-red-600">避けるべきこと</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">&#10007;</span>
                            <span>JSONカラムの多用</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">&#10007;</span>
                            <span>パスワードを平文で保存</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">&#10007;</span>
                            <span>曖昧な命名（data, info）</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">&#10007;</span>
                            <span>外部キー制約なしの参照</span>
                        </li>
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
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>テーブル間のリレーション（1対多、多対多）を理解する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>適切な型と制約（NOT NULL, UNIQUE, FK）を設定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>created_at, updated_atは必須</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">&#10003;</span>
                        <span>パスワードは必ずハッシュ化して保存</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="api-design.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                API設計
            </a>
            <a href="docker-intro.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：Dockerとは
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
