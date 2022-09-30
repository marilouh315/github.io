using System;

namespace EXAM_1_DD
{
    internal class Program
    {
        static void Main(string[] args)
        {
            jouerDD2();
        }

        static void jouerDD1()
        {
            // Guerrier humain
            int guerrierHP = 30;
            int statAttaqueG = 0;
            int statDefenseG = 18;
            int deDommageG = 8;
            int bonusDommageG = 2;

            Random random = new Random();

            statAttaqueG = random.Next(14, 18);
            deDommageG = random.Next(1, 8);

            // Caractéristiques initiales du Guerrier humain

            Console.WriteLine("Voici les caractéristiques du GUERRIER HUMAIN");
            Console.WriteLine("Points de vie : " + guerrierHP + " pts");
            Console.WriteLine("Statistiques d'attaque : " + statAttaqueG);
            Console.WriteLine("Statistiques de défense : " + statDefenseG);
            Console.WriteLine("Dé de dommage : " + deDommageG);
            Console.WriteLine("Bonus de dommage : " + bonusDommageG);


            // ORC
            int oRCHp = 30;
            int statAttaqueORC = 0;
            int statDefenseORC = 14;
            int deDommageORC = 10;
            int bonusDommageORC = 2;

            statAttaqueORC = random.Next(10, 18);
            deDommageORC = random.Next(1, 10);

            Console.WriteLine("\n Voici les caractéristiques du l'ORC");
            Console.WriteLine("Points de vie : " + oRCHp + " pts");
            Console.WriteLine("Statistiques d'attaque : " + statAttaqueORC);
            Console.WriteLine("Statistiques de défense : " + statDefenseORC);
            Console.WriteLine("Dé de dommage : " + deDommageORC);
            Console.WriteLine("Bonus de dommage : " + bonusDommageORC);

            ////////////////////////////////////////////////////////////////////

            // Calculer initiative 
            int lanceDeGuerrier = 0;
            int lanceDeORC = 0;

            lanceDeGuerrier = random.Next(1, 20);
            lanceDeORC = random.Next(1, 20);

            if (lanceDeGuerrier > lanceDeORC)
            {
                Console.WriteLine("C'est le Guerrier humain qui commence");

                // C'est le guerrier qui effectue les premieres attaques
                lanceDeGuerrier = random.Next(1, 20);
                if (lanceDeGuerrier >= statDefenseORC)
                {
                    double resultatBonusDommage = (statAttaqueG - 9) / 2;
                    Console.WriteLine("Votre bonus de dommage est de : " + resultatBonusDommage);

                    double resultatDommage = 30 - (deDommageG + resultatBonusDommage);

                    Console.WriteLine("L'ORC a maintenant comme points de vie : " + resultatDommage + "pts de vie");

                }
            }
            else if (lanceDeGuerrier < lanceDeORC)
            {
                Console.WriteLine("C'est l'ORC qui commence");
            }
            else
            {
                Console.WriteLine("C'est le Guerrier humain qui commence pareil");

                // C'est le guerrier qui effectue les premieres attaques
                lanceDeGuerrier = random.Next(1, 20);
                if (lanceDeGuerrier >= statDefenseORC)
                {
                    double resultatBonusDommage = (statAttaqueG - 9) / 2;
                    Console.WriteLine("Votre bonus de dommage est de : " + resultatBonusDommage);

                    double resultatDommage = 30 - (deDommageG + resultatBonusDommage);

                    Console.WriteLine("L'ORC a maintenant comme points de vie : " + resultatDommage + "pts de vie");

                }
            }

            ////////////////////////////////////////////////////////////////////////

            // Calculer touches et dommages
            lanceDeGuerrier = random.Next(1, 20);

            if (lanceDeGuerrier >= statDefenseORC)
            {
                double resultatBonusDommage = (statAttaqueG - 9) / 2;
                Console.WriteLine("Votre bonus de dommage est de : " + resultatBonusDommage);

                double resultatDommage = 30 - (deDommageG + resultatBonusDommage);

                Console.WriteLine("L'ORC a maintenant comme points de vie : " + resultatDommage + "pts de vie");

            }


        }



        static void jouerDD2()
        {
            // Guerrier humain
            Random random = new Random();

            int guerrierHP = 30;
            int statAttaqueG = random.Next(14, 18);
            int statDefenseG = 18;
            int deDommageG = 8;
            int bonusDommageG = 2;
            int guerrierInitiative = 0;
            int guerrierDommage = 0;


            int orcHp = 30;
            int statAttaqueORC = random.Next(10, 18);
            int statDefenseORC = 14;
            int deDommageORC = 10;
            int bonusDommageORC = 2;
            int orcInitiative = 0;
            int orcDommage = 0;

            bonusDommageG = bonusDommageG + (statAttaqueG - 9) / 2;
            bonusDommageORC = bonusDommageORC + (statAttaqueORC - 9) / 2;



            // Rouler initiative
            guerrierInitiative = random.Next(1, 21);
            orcInitiative=random.Next(1, 21);

            // Humain premier 
            if (guerrierInitiative >= orcInitiative)
            {
                // ici toucher et dommage guerrier en premier 
                Console.WriteLine("Le guerrier attaque en premier");
                // attaque du guerrier 
                if (random.Next(1, 21) > statDefenseORC)
                {
                    guerrierDommage = random.Next(1, deDommageG + 1) + bonusDommageG;
                    Console.WriteLine("Guerrier touche pour " + guerrierDommage + " pts de dommage");
                    orcHp = orcHp - guerrierDommage;
                }


            }
            else
            {
                // ici toucher et dommage orc en premier
                Console.WriteLine("Le guerrier rate !");
            }



            // Attaque de l'orc 
            if (random.Next(1, 21) >= statDefenseORC)
            {
                orcDommage = random.Next(1, orcDommage + 1) + bonusDommageORC;
                Console.WriteLine("L'orc touche pour " + orcDommage + " pts de dommage");
                orcHp = orcHp - guerrierDommage;
            }
            else
            {
                // ici toucher et dommage orc en premier
                Console.WriteLine("Le guerrier rate !");
            }





            // Caractéristiques initiales du Guerrier humain

            Console.WriteLine("Voici les caractéristiques du GUERRIER HUMAIN");
            Console.WriteLine("Points de vie : " + guerrierHP + " pts");
            Console.WriteLine("Statistiques d'attaque : " + statAttaqueG);
            Console.WriteLine("Statistiques de défense : " + statDefenseG);
            Console.WriteLine("Dé de dommage : " + deDommageG);
            Console.WriteLine("Bonus de dommage : " + bonusDommageG);

            // Caractéristiques initiales de l'ORC
            Console.WriteLine("\n Voici les caractéristiques du l'ORC");
            Console.WriteLine("Points de vie : " + orcHp + " pts");
            Console.WriteLine("Statistiques d'attaque : " + statAttaqueORC);
            Console.WriteLine("Statistiques de défense : " + statDefenseORC);
            Console.WriteLine("Dé de dommage : " + deDommageORC);
            Console.WriteLine("Bonus de dommage : " + bonusDommageORC);



        }




    }
}