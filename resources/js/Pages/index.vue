<template>
    <layout>
        <template v-slot:top-img>
            <div style="width: 100vw;height: 80vh; background-size: cover; background-image: url('/images/top-img.jpeg'); display: flex; align-items: center;">
                <div style="color: white; margin: auto;">
                    <div style="font-size: 2rem; text-shadow: 1px 1px #aaa; text-align: center;">
                        <!-- 新しいWebサービスであなたの未来を開く！ 
                        <br>「未来へのオープンパス」 -->

                        あなたのWebサービスを今すぐ開発！
                        <br>夢だったプロジェクトを実現
                        <br>未来へ向かう第一歩を「今」始めよう


                    </div>
                </div>
            </div>
        </template>
        <template v-slot>
            <br>
            <div class="text-center font-bold" style="font-size: 1.2rem; color: #333; line-height: 2rem;">
                私達Noland制作では、<br>
                <span style="color: #008080;">「Webのトレンドを抑えた美しく見やすい制作」</span><br>
                をモットーに、<br>
                <br>
                納期保証を最優先しながらも素早いレスポンスを心がけた<br>
                制作活動を行っています。
            </div>
            <br>
            <br>

            <h1>最新のブログ記事</h1>
            <v-row class="mt-2">
                <v-col
                  cols="4"
                  sm="4"
                  v-for="blog in blogs"
                  :key="blog.id"
                >
                    
                    <v-card
                        class="mx-auto"
                        max-width="344"
                    >
                        <a v-bind:href='`/blogs/${blog.id}`'>
                            <v-img
                            :src="`/images/${blog.img}`"
                            height="200px"
                            cover
                            ></v-img>
                        </a>

                        <a v-bind:href='`/blogs/${blog.id}`'>
                            <v-card-title style="font-size: 1.2rem;">
                                {{ blog.title }}
                            </v-card-title>
                        </a>

                        <v-card-subtitle>
                            {{ blog.created_at }}
                        </v-card-subtitle>

                        <v-card-actions>
                        <v-btn
                            color="orange-lighten-2"
                            variant="text"
                            @click="blog.show = !blog.show"
                        >
                            サマリー
                        </v-btn>

                        <v-spacer></v-spacer>

                        <v-btn
                            :icon="blog.show ? 'mdi-chevron-up' : 'mdi-chevron-down'"
                            @click="blog.show = !blog.show"
                        ></v-btn>
                        </v-card-actions>

                        <v-expand-transition>
                        <div v-show="blog.show">
                            <v-divider></v-divider>

                            <v-card-text>
                                <p class="line-clamp-4" style="font-size: 0.8rem;">
                                    {{ blog.summary }}
                                </p>
                            </v-card-text>
                        </div>
                        </v-expand-transition>
                    </v-card>
                </v-col>
            </v-row>

            <br>
            <br>
            <br>
            <div class="text-center">
                <h2 class="font-bold" style="font-size:1.6rem">プログラミング学習支援サービス<br>「MatchPro」</h2>
                <br>
                <div style="line-height: 2rem;">
                    <p>
                        プログラミングを始めたい方と
                        プログラミングを教えたい方の<br>
                        マッチングが簡単に行えます。<br>
                        <br>
                        事前に講義アジェンダをご提出頂き、審査を通過した優秀なメンターから<br>
                        プログラミングを始める上でのノウハウを教わることができます。
                    </p>
                </div>
                <br>

                <v-row>
                    <v-col>
                        <v-btn
                        variant="flat"
                        color="success"
                        href="https://match-pro.com/login"
                        >
                        生徒としてご利用希望の方はこちら
                        </v-btn>
                    </v-col>
                    <v-col>
                        <v-btn
                        variant="flat"
                        color="warning"
                        href="https://match-pro.com/mentor_login"
                        >
                        講師としてご利用希望の方はこちら
                        </v-btn>
                    </v-col>
                </v-row>
                <br>
                <br>
                <br>

                <h2 class="font-bold" style="font-size:1.2rem;">他のメンター仲介サービスとの違いは？</h2>
                <br>
                <div style="line-height: 2rem;">
                    <p>
                        当サービスの一番の強みは「圧倒的なコスパ」です。<br>
                        <br>
                        理由はとてもシンプルで、<br>
                        目指すところが「IT企業への就職保証」などではなく、単に<br>
                        <span style="color: #008080; font-size: 1.2rem;" class="font-bold">「独学でガンガン開発できるようになること」</span><br>
                        だからです。<br>
                        <br>
                        私達Noland制作の開発メンバーは、<br>
                        過去にプログラミングスクールやメンター仲介サービスを利用した人はおらず、<br>
                        「趣味で独学開発していた結果、仕事に繋がった」というエンジニアの集団です。<br>
                        <br>
                        そのような私達だからこそ、<br>
                        <span style="color: #008080; font-size: 1.2rem;" class="font-bold">「好きこそものの上手なれ」</span><br>
                        というシンプルな理念のもとに、<br>
                        より多くのプログラミングに興味がある人にとって<br>
                        合理的かつ高コスパなサービスを展開したいという強い思いがあります。
                    </p>
                </div>
                <br>

                <v-row>
                    <v-col>
                        <v-btn
                        variant="flat"
                        color="success"
                        href="https://match-pro.com/login"
                        >
                        生徒としてご利用希望の方はこちら
                        </v-btn>
                    </v-col>
                    <v-col>
                        <v-btn
                        variant="flat"
                        color="warning"
                        href="https://match-pro.com/mentor_login"
                        >
                        講師としてご利用希望の方はこちら
                        </v-btn>
                    </v-col>
                </v-row>
                <br>
                <br>
                <br>
            </div>
        </template>
    </layout>
</template>

<script>
    import { InertiaLink } from '@inertiajs/inertia-vue3'
    import Layout from './Layouts/Layout.vue'

    export default {
        data: () => ({
            
        }),
        props: {
            blogs: Array,
        },
        components: {
            Layout,
        },
    }
</script>
  