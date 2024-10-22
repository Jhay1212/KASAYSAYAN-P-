const historyMap = {
  "preColonial": {
    era: "Pre-Colonial Period",
    description: "The Philippines before colonial rule was characterized by independent barangays, a stratified society, trade relations across Asia, and a rich cultural and religious life influenced by local traditions and external influences."
  },
  "spanishColonial": {
    era: "Spanish Colonization",
    description: "Beginning in 1521, Spanish colonization reshaped the Philippines over the next three centuries, with changes in politics, society, economy, and religion, setting the stage for the eventual rise of nationalism."
  },
  "americanColonial": {
    era: "American Colonialism (1898-1946)",
    description: "After Spain ceded the Philippines to the U.S. in 1898, American colonial rule introduced new political systems, education, and economic structures, culminating in the Commonwealth era and eventual independence."
  },
  "japaneseOccupation": {
    era: "Japanese Occupation (1942-1945)",
    description: "During World War II, the Philippines endured brutal occupation by Japan, marked by the Bataan Death March and widespread suffering, before liberation in 1945."
  },
  "postIndependence": {
    era: "Post-Independence and Early Republic",
    description: "After gaining independence in 1946, the Philippines faced challenges of rebuilding and asserting its national identity amid economic dependence and political struggles."
  },
  "philippineRepublic": {
    era: "Period of the Philippine Republic (1946 - Present)",
    description: "Since independence, the Philippines has navigated through various political administrations, social upheavals, and economic transformations, continuing its quest for true democracy and national identity."
  },
  "barangaySystem": {
    era: "Barangay System and Political Organization",
    description: "In the pre-colonial era, barangays were the fundamental political units, ruled by local chieftains or datus, who led both governance and community organization."
  },
  "socialStratification": {
    era: "Social Stratification",
    description: "Pre-colonial Philippine society was divided into classes such as the ruling class (maharlika), freemen (timawa), and slaves (alipin), with mobility within this hierarchy."
  },
  "economicSystemsTrade": {
    era: "Economic Systems and Trade",
    description: "Pre-colonial Filipinos engaged in both subsistence agriculture and extensive trade with neighboring regions like China, India, and the Middle East."
  },
  "culturalReligiousLife": {
    era: "Cultural and Religious Life",
    description: "The religious beliefs of pre-colonial Filipinos were rooted in animism, with a pantheon of deities and spirits, and the community was deeply influenced by oral traditions, rituals, and local arts."
  },
  "preColonialLegal": {
    era: "Pre-Colonial Legal Systems",
    description: "Justice in pre-colonial Philippines was based on customary laws and adjudicated by the datu, with sanctions ranging from fines to servitude depending on the crime."
  },
  "absenceOfUnity": {
    era: "Absence of National Unity",
    description: "Before colonization, the Philippines lacked national unity, with barangays functioning independently and often in conflict with one another."
  },
  "externalInfluences": {
    era: "External Influences and Cultural Adaptation",
    description: "Trade and migration brought external influences to the Philippines, shaping its language, religion, and cultural practices."
  },
  "spanishArrival": {
    era: "The Arrival of the Spanish (1521–1565)",
    description: "The arrival of Ferdinand Magellan in 1521 marked the beginning of European presence, leading to initial conflicts with local rulers and the introduction of Christianity."
  },
  "spanishRule": {
    era: "The Establishment of Spanish Rule (1565–1600)",
    description: "Spanish rule formally began with the conquest of Cebu in 1565 by Miguel López de Legazpi, ushering in widespread conversion to Christianity and the colonial system."
  },
  "societalChangesSpanish": {
    era: "Societal Changes and Economic Structures (1600–1800)",
    description: "During this period, Spanish rule transformed Philippine society, introducing the encomienda system, land ownership policies, and new religious orders."
  },
  "culturalDevelopments": {
    era: "Cultural and Intellectual Developments (1800–1896)",
    description: "This period saw the rise of Filipino intellectuals and writers, such as José Rizal and Francisco Balagtas, whose works challenged colonial oppression and inspired national consciousness."
  },
  "rizalNationalism": {
    era: "José Rizal and the Rise of Nationalism",
    description: "José Rizal, through his novels and activism, became a leading figure in the Filipino nationalist movement that sought reforms and independence from Spanish rule."
  },
  "riseNationalism": {
    era: "The Rise of Nationalism (1892–1896)",
    description: "The late 19th century witnessed the birth of organized nationalist movements like the Katipunan, aiming to overthrow Spanish colonial rule."
  },
  "endOfSpanishRule": {
    era: "The End of Spanish Rule (1898)",
    description: "The Spanish-American War of 1898 marked the end of over 300 years of Spanish rule in the Philippines, with the country ceded to the United States."
  },
  "preludeToWar": {
    era: "Prelude to War",
    description: "The tensions between the Filipino revolutionary forces and the Americans escalated after the Treaty of Paris, leading to the Philippine-American War."
  },
  "battleManilaBay": {
    era: "Battle of Manila Bay",
    description: "The Battle of Manila Bay in 1898 was a decisive victory for the U.S. Navy over Spain, signaling the start of American control over the Philippines."
  },
  "aguinaldoReturn": {
    era: "Aguinaldo’s Return",
    description: "Emilio Aguinaldo, the Filipino revolutionary leader, returned from exile in 1898 to lead the fight against both Spanish and American colonizers."
  },
  "mockBattle": {
    era: "Mock Battle",
    description: "The Mock Battle of Manila in 1898 was a staged conflict between Spanish and American forces, allowing Spain to surrender the city to the U.S. without involving Filipino forces."
  },
  "americanIntention": {
    era: "America’s True Intention",
    description: "Despite initial cooperation with Filipino revolutionaries, it became clear that the U.S. intended to establish colonial control over the Philippines."
  },
  "philAmWar": {
    era: "War of America and Filipino",
    description: "The Philippine-American War (1899–1902) was a brutal conflict between the newly established U.S. colonial government and Filipino forces fighting for independence."
  },
  "insularGovt": {
    era: "Insular Government",
    description: "After the Philippine-American War, the U.S. established the Insular Government, marking the beginning of direct American colonial rule."
  },
  "philippineCommonwealth": {
    era: "Philippine Commonwealth",
    description: "The Commonwealth era (1935–1946) provided Filipinos limited self-governance in preparation for full independence, which was delayed due to World War II."
  },
  "bataanMarch": {
    era: "Bataan Death March",
    description: "The Bataan Death March was one of the most harrowing events of the Japanese occupation, where thousands of Filipino and American POWs were forced to march under brutal conditions."
  },
  "occupation": {
    era: "Occupation",
    description: "The Japanese occupation of the Philippines was marked by harsh military rule, economic exploitation, and the rise of Filipino guerilla resistance."
  },
  "endOccupation": {
    era: "End of Occupation",
    description: "The Japanese occupation ended in 1945 when Allied forces, with the help of Filipino guerrillas, liberated the Philippines."
  },
  "postColonialStruggle": {
    era: "The Post-Colonial Struggle: A Nation in Chains of its Past",
    description: "After gaining independence, the Philippines struggled to overcome the legacies of colonialism, including economic dependence and political instability."
  },
  "economicDependence": {
    era: "Economic Dependence and Neocolonialism",
    description: "Even after independence, the Philippines remained economically dependent on foreign powers, leading to a form of neocolonialism."
  },
  "politicalPower": {
    era: "Political Power and the Entrenched Elite",
    description: "The political landscape of post-colonial Philippines was dominated by an entrenched elite, often at the expense of true democratic participation."
  },
  "struggleForDemocracy": {
    era: "The Struggle for True Democracy",
    description: "The Philippines has faced a long and ongoing struggle to establish a stable democracy, challenged by corruption, dictatorship, and political dynasties."
  },
  "martialLaw": {
    era: "Martial Law: The Death and Rebirth of Democracy",
    description: "Ferdinand Marcos’ declaration of Martial Law in 1972 suspended democratic processes, but the People Power Revolution of 1986 restored democracy in the Philippines."
  },
  "nationalIdentity": {
    era: "Continuing the Struggle for National Identity",
    description: "The Philippines continues to grapple with the question of national identity, influenced by its colonial past and ongoing cultural evolution."
  },
  "questForSovereignty": {
    era: "The Continuing Quest for Sovereignty and Identity",
    description: "Despite independence, the Philippines continues its quest for true sovereignty and a distinct national identity in a globalized world."
  }
};


const desc = document.querySelector('.desc');
const squares = document.querySelectorAll('.square');

squares.forEach(square => {
    square.addEventListener('click', (e) => {
        const title = e.currentTarget.dataset.title.toLowerCase(); // Get the bookmark title
        const content = historyMap[title]; // Find corresponding history data by title
        console.log(title, content);
        
        if (content) {
            // Update the description section with the matching history data
            desc.innerHTML = `<h3>${content.era}</h3><p>${content.description}</p>`;
        } else {
            // If no matching content is found, show a default message
            desc.textContent = "No preview available for this bookmark.";
        }
    });
});
