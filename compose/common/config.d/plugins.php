<?php

return [
    'plugins' => [
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],

        'MultipleLocalAuth' => ['namespace' => 'MultipleLocalAuth'],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],

        'SendEmailUser' => ['namespace' => 'SendEmailUser'],
        'Report' => ['namespace' => 'Report'],
        'MultipleLocalAuth' => ['namespace' => 'MultipleLocalAuth'],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical'],
        'EvaluationMethodSeplag' => [
            'namespace' => 'EvaluationMethodSeplag',
            'config' => [
                'opportunity_id' => 2852,
                'api_seplag' => [
                    'auth' => [
                        'method' => 'POST',
                        'URL' => 'http://appsweb.seplag.ce.gov.br/spg-guardiao-backend/api/token/login',
                        'keys' => [
                            'cpf' => 'env_cpf',
                            'password' => 'env_password',
                            'idSistema' => 'env_id'
                        ]
                    ],
                    'search' => [
                        'method' => 'GET',
                        'URL' => 'https://web5.seplag.ce.gov.br/eceara-backend/api/eceara/colaboradores/secult'
                    ]
                ],
                'agent_id' => 96726,
                'user_id' => 82401,
                'log' => true,
                'cron_sql_limit' => 20
            ]
        ],
        'Accessibility' => ['namespace' => 'Accessibility'],
        //'PWA' => ['namespace' => 'PWA'],
        'ChatTawkto' => [
            'namespace' => 'ChatTawkto',
            'config' => [
                'chat_link_url' => 'https://tawk.to/chat/5f35c9424c7806354da63dc9/default',
            ],
        ],
        'RegistrationPaymentsAuxilio' => [
            'namespace' => 'RegistrationPaymentsAuxilio',
            'config' => [
                'opportunity_id' => 2852
            ]
        ],
        'AldirBlanc' => [
            'namespace' => 'AldirBlanc',
            'config' => [
                'logotipo_instituicao' => 'https://mapacultural.secult.ce.gov.br/assets/img/logo-org-ceara-small.png',
                'logotipo_central' => 'https://mapacultural.secult.ce.gov.br/assets/img/lei-aldir-small.png',
                'link_suporte' => 'https://tawk.to/chat/5f35c9424c7806354da63dc9/default',
                'privacidade_termos_condicoes' => 'https://mapacultural.secult.ce.gov.br/autenticacao/termos-e-condicoes',
                'project_id' => 1992,
                'inciso1_enabled' => true,
                'inciso1_opportunity_id' => 2059,

                // primeiro ocorre a homologa????o, s?? depois as valida????es
                'homologacao_requer_validacao' => [],

                // indica que a consolida????o do status "Selecionada" s?? deve acontecer
                'consolidacao_requer_validacao' => ['dataprev', 'scge'],

                //Usuarios dos avaliadores dataprev e scge
                'inciso1_dataprev_id' => 52977,
                'inciso1_scge_id' => 52978,

                //Mensagens do Resultado Inciso 1
                'inciso1MessageResult' => [
                    //STATUS_SENT = 1
                    '1' => [
                        'title'   => 'Sua solicita????o segue em an??lise.',
                        'message' => 'Consulte novamente em outro momento. Voc?? tamb??m receber?? o resultado da sua solicita????o por e-mail.',
                    ],
                    //STATUS_APPROVED = 10;
                    '10' => [
                        'title'   => 'Sua solicita????o foi aprovada.',
                        'message' => '<p>Caso tenha optado por transa????o banc??ria, brevemente seu benef??cio ser?? disponibilizado na conta informada.</p>
                    <p>Caso tenha optado por ordem de pagamento, quando disponibilizado o recurso, voc?? poder?? realizar o saque diretamente em qualquer ag??ncia do Banco do Brasil pessoalmente - apresentando RG e CPF, sem nenhum custo.</p>
                    <p>Em virtude da pandemia da covid-19, algumas ag??ncias do Banco do Brasil podem estar operando com restri????es e hor??rios diferenciados de funcionamento, conforme determina????o do poder p??blico.</p>',
                    ],
                    //STATUS_INVALID = 2;
                    '2' => [
                        'title'   => 'Sua solicita????o foi negada.',
                        'message' => 'N??o atendeu aos requisitos necess??rios. Caso n??o concorde com o resultado, voc?? poder?? fazer enviar novo formul??rio de solicita????o ao benef??cio - fique atento aos preenchimento dos campos.',
                    ],
                    //STATUS_NOTAPPROVED = 3;
                    '3' => [
                        'title'   => 'Sua solicita????o foi negada.',
                        'message' => 'N??o atendeu aos requisitos necess??rios. Caso n??o concorde com o resultado, voc?? poder?? fazer enviar novo formul??rio de solicita????o ao benef??cio - fique atento aos preenchimento dos campos.',
                    ],
                    //STATUS_WAITLIST = 8;
                    '8' => [
                        'title'   => 'Sua solicita????o foi validada.',
                        'message' => 'Os recursos disponibilizados j?? foram destinados. Para sua solicita????o ser aprovada ser?? necess??rio aguardar poss??vel libera????o de recursos. Em caso de aprova????o, voc?? tamb??m ser?? notificado por e-mail. Consulte novamente em outro momento.',
                    ]
                ],

                //Mensagem do Recurso Inciso 1
                'inciso1MessageAppeal' => 'Os recursos devem ser enviados para o e-mail <b>recursorendabasica@secult.ce.gov.br</b>.<br/><br/>Informando o seu n??mero de inscri????o <b>%REGISTRATION->NUMBER%</b> no campo assunto do email. Por favor, para agilizar o processo, o solicitante deve informar tamb??m no texto do e-mail o motivo do indeferimento da inscri????o tal como aparece em sua p??gina de acompanhamento.<br/><br/> D??vidas sobre o processo de recurso ou suporte ao Mapa Culturais entre em contato com nossa equipe de suporte pelo chat online. <a href="%CONFIG_LINK_SUPORTE%" target="_blank">Precisa de ajuda? Para falar com nossa equipe de suporte clique aqui!</a>',

                'inciso2_enabled' => true,
                'inciso2_opportunity_ids' => [
                    'ABAIARA'                    => 2161,
                    'ACARAPE'                    => 2162,
                    'ACARA??'                    => 2163,
                    'ACOPIARA'                    => 2164,
                    'AIUABA'                    => 2165,
                    'ALC??NTARAS'                => 2166,
                    'ALTANEIRA'                    => 2167,
                    'ALTO SANTO'                => 2168,
                    'AMONTADA'                    => 2169,
                    'ANTONINA DO NORTE'            => 2170,
                    'APUIAR??S'                    => 2171,
                    'AQUIRAZ'                    => 2172,
                    'ARACATI'                    => 2173,
                    'ARACOIABA'                    => 2174,
                    'ARAREND??'                    => 2175,
                    'ARARIPE'                    => 2176,
                    'ARATUBA'                    => 2177,
                    'ARNEIROZ'                    => 2178,
                    'ASSAR??'                    => 2179,
                    'AURORA'                    => 2180,
                    'BAIXIO'                    => 2181,
                    'BANABUI??'                    => 2182,
                    'BARBALHA'                    => 2183,
                    'BARRO'                        => 2184,
                    'BARROQUINHA'                => 2185,
                    'BATURIT??'                    => 2186,
                    'BEBERIBE'                    => 2187,
                    'BELA CRUZ'                    => 2188,
                    'BOA VIAGEM'                => 2189,
                    'BREJO SANTO'                => 2190,
                    'CAMOCIM'                    => 2191,
                    'CAMPOS SALES'                => 2192,
                    'CANIND??'                    => 2193,
                    'CAPISTRANO'                => 2194,
                    'CARIR??'                    => 2195,
                    'CARIRIA??U'                    => 2196,
                    'CARI??S'                    => 2197,
                    'CASCAVEL'                    => 2198,
                    'CATUNDA'                    => 2199,
                    'CAUCAIA'                    => 2200,
                    'CEDRO'                        => 2201,
                    'CHAVAL'                    => 2202,
                    'CHOR??'                        => 2203,
                    'CHOROZINHO'                => 2204,
                    'COREA??'                    => 2205,
                    'CRATE??S'                    => 2206,
                    'CRATO'                        => 2207,
                    'CROAT??'                    => 2208,
                    'CRUZ'                        => 2209,
                    'DEPUTADO IRAPUAN PINHEIRO'    => 2210,
                    'ERER??'                        => 2211,
                    'EUS??BIO'                    => 2212,
                    'FARIAS BRITO'                => 2213,
                    'FORQUILHA'                    => 2214,
                    'FORTALEZA'                    => 2215,
                    'FORTIM'                    => 2216,
                    'FRECHEIRINHA'                => 2217,
                    'GENERAL SAMPAIO'            => 2218,
                    'GRANJA'                    => 2219,
                    'GRANJEIRO'                    => 2220,
                    'GROA??RAS'                    => 2221,
                    'GUAI??BA'                    => 2222,
                    'GUARACIABA DO NORTE'        => 2223,
                    'GUARAMIRANGA'                => 2224,
                    'HIDROL??NDIA'                => 2225,
                    'HORIZONTE'                    => 2226,
                    'IBARETAMA'                    => 2227,
                    'IBIAPINA'                    => 2228,
                    'IBICUITINGA'                => 2229,
                    'ICAPU??'                    => 2230,
                    'IC??'                        => 2231,
                    'IGUATU'                    => 2232,
                    'INDEPEND??NCIA'                => 2233,
                    'IPAPORANGA'                => 2234,
                    'IPAUMIRIM'                    => 2235,
                    'IPU'                        => 2236,
                    'IPUEIRAS'                    => 2237,
                    'IRACEMA'                    => 2238,
                    'IRAU??UBA'                    => 2239,
                    'ITAI??ABA'                    => 2240,
                    'ITAITINGA'                    => 2241,
                    'ITAPAJ??'                    => 2242,
                    'ITAPIPOCA'                    => 2243,
                    'ITAPI??NA'                    => 2244,
                    'ITATIRA'                    => 2245,
                    'JAGUARETAMA'                => 2246,
                    'JAGUARIBARA'                => 2247,
                    'JAGUARIBE'                    => 2248,
                    'JAGUARUANA'                => 2249,
                    'JARDIM'                    => 2250,
                    'JATI'                        => 2251,
                    'JIJOCA DE JERICOACOARA'    => 2252,
                    'JUAZEIRO DO NORTE'            => 2253,
                    'JUC??S'                        => 2254,
                    'LAVRAS DA MANGABEIRA'        => 2255,
                    'LIMOEIRO DO NORTE'            => 2256,
                    'MADALENA'                    => 2257,
                    'MARACANA??'                    => 2258,
                    'MARANGUAPE'                => 2259,
                    'MARCO'                        => 2260,
                    'MARTIN??POLE'                => 2261,
                    'MASSAP??'                    => 2262,
                    'MAURITI'                    => 2263,
                    'MERUOCA'                    => 2264,
                    'MILAGRES'                    => 2265,
                    'MILH??'                        => 2266,
                    'MISS??O VELHA'                => 2267,
                    'MOMBA??A'                    => 2268,
                    'MONSENHOR TABOSA'            => 2269,
                    'MORADA NOVA'                => 2270,
                    'MORRINHOS'                    => 2271,
                    'MUCAMBO'                    => 2272,
                    'MULUNGU'                    => 2273,
                    'NOVA OLINDA'                => 2274,
                    'NOVA RUSSAS'                => 2275,
                    'NOVO ORIENTE'                => 2276,
                    'OCARA'                        => 2277,
                    'OR??S'                        => 2278,
                    'PACAJUS'                    => 2279,
                    'PACATUBA'                    => 2280,
                    'PACOTI'                    => 2281,
                    'PACUJ??'                    => 2282,
                    'PALHANO'                    => 2283,
                    'PALM??CIA'                    => 2284,
                    'PARACURU'                    => 2285,
                    'PARAIPABA'                    => 2286,
                    'PARAMOTI'                    => 2287,
                    'PEDRA BRANCA'                => 2288,
                    'PENAFORTE'                    => 2289,
                    'PENTECOSTE'                => 2290,
                    'PEREIRO'                    => 2291,
                    'PINDORETAMA'                => 2292,
                    'PIQUET CARNEIRO'            => 2293,
                    'PORANGA'                    => 2294,
                    'PORTEIRAS'                    => 2295,
                    'POTENGI'                    => 2296,
                    'POTIRETAMA'                => 2297,
                    'QUITERIAN??POLIS'            => 2298,
                    'QUIXAD??'                    => 2299,
                    'QUIXEL??'                    => 2300,
                    'QUIXERAMOBIM'                => 2301,
                    'QUIXER??'                    => 2302,
                    'REDEN????O'                    => 2303,
                    'RUSSAS'                    => 2304,
                    'SALITRE'                    => 2305,
                    'SANTA QUIT??RIA'            => 2306,
                    'SANTANA DO ACARA??'            => 2307,
                    'SANTANA DO CARIRI'            => 2308,
                    'S??O BENEDITO'                => 2309,
                    'S??O GON??ALO DO AMARANTE'    => 2310,
                    'S??O JO??O DO JAGUARIBE'        => 2311,
                    'S??O LU??S DO CURU'            => 2312,
                    'SENADOR POMPEU'            => 2313,
                    'SENADOR S??'                => 2314,
                    'SOBRAL'                    => 2315,
                    'SOLON??POLE'                => 2316,
                    'TABULEIRO DO NORTE'        => 2317,
                    'TAMBORIL'                    => 2318,
                    'TARRAFAS'                    => 2319,
                    'TAU??'                        => 2320,
                    'TEJU??UOCA'                    => 2321,
                    'TIANGU??'                    => 2322,
                    'TRAIRI'                    => 2323,
                    'TURURU'                    => 2324,
                    'UBAJARA'                    => 2325,
                    'UMARI'                        => 2326,
                    'UMIRIM'                    => 2327,
                    'URUBURETAMA'                => 2328,
                    'URUOCA'                    => 2329,
                    'VARJOTA'                    => 2330,
                    'V??RZEA ALEGRE'                => 2331,
                    'VI??OSA DO CEAR??'            => 2332
                ],
            ]
        ],


        'AldirBlancDataprev' => [
            'namespace' => 'AldirBlancDataprev',
            'config' => [
                // indica que s?? deve exportar as inscri????es j?? homologadas
                'exportador_requer_homologacao' => true,

                // indica que s?? deve consolidar o resultado se a inscri????o
                // j?? tiver sido processada pelo SCGE
                'consolidacao_requer_validacoes' => ['scge'],
            ],
        ],

        'SCGE' => [
            'namespace' => 'AldirBlancValidador',
            'config' => [
                // slug utilizado como id do controller e identificador do validador
                'slug' => 'scge',

                // nome apresentado na interface
                'name' => 'SCGE',

                // indica que s?? deve exportar as inscri????es j?? homologadas
                'exportador_requer_homologacao' => true,

                // indica que a exporta????o n??o requer nenhuma valida????o
                'exportador_requer_validacao' => [],

                // indica que s?? deve consolidar o resultado se a inscri????o
                // j?? tiver sido processada pelo Dataprev
                'consolidacao_requer_validacoes' => ['dataprev'],

                'inciso1' => [
                    // id do field do formul??rio 
                    'CPF' => 6479,
                ],
            ]
        ]

    ]
];
