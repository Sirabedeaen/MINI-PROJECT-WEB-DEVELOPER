PGDMP  "                    |            miniproject    16.1    16.1     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16398    miniproject    DATABASE     �   CREATE DATABASE miniproject WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_United States.1252';
    DROP DATABASE miniproject;
                postgres    false            �            1259    16411    pasien    TABLE     2  CREATE TABLE public.pasien (
    id integer NOT NULL,
    nik bigint NOT NULL,
    nama character varying NOT NULL,
    email character varying NOT NULL,
    telepon bigint NOT NULL,
    alamat character varying NOT NULL,
    username character varying NOT NULL,
    password character varying NOT NULL
);
    DROP TABLE public.pasien;
       public         heap    postgres    false            �            1259    16410    pasien_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pasien_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.pasien_id_seq;
       public          postgres    false    216            �           0    0    pasien_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.pasien_id_seq OWNED BY public.pasien.id;
          public          postgres    false    215                       2604    16414 	   pasien id    DEFAULT     f   ALTER TABLE ONLY public.pasien ALTER COLUMN id SET DEFAULT nextval('public.pasien_id_seq'::regclass);
 8   ALTER TABLE public.pasien ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            �          0    16411    pasien 
   TABLE DATA           [   COPY public.pasien (id, nik, nama, email, telepon, alamat, username, password) FROM stdin;
    public          postgres    false    216   <       �           0    0    pasien_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.pasien_id_seq', 7, true);
          public          postgres    false    215                       2606    16418    pasien pasien_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.pasien
    ADD CONSTRAINT pasien_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.pasien DROP CONSTRAINT pasien_pkey;
       public            postgres    false    216            �   �  x��R�N�0<o�b? �q��FK��*H�p�+5M�*����^��,g�ffǓ���|�p�:�@\_Uru��`Z�R��WK�S�Sl��L4��TIO�Z�ǡ� �Cݝ��a��T���j�+���j�z�����dZ��)�\
1�k�s����v����'�7t8Z�_���[��j�gI�sVУ4F�/9�'�΀��2:cU\�0�6b�ÖK
չ��C��،]y��bp%�RdJK%�BF�x
��,�[������<nl,x0���^�7I�aa;⑷#�}��;_6�v���#� �5�T:l��ÂJb�iG�e<�s/BLx�e��-�CI��AQ��/��K�;4#L���9H](Y?G(�7L�sZ&�G2Ү��O�����d2�|��     